<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AdmissionModel;
use App\Models\BranchModel;
use App\Models\CourseModel;
use Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['TotalUserCount'] = User::count();
        $data['TotalStusentCount'] = AdmissionModel::count();
        $data['TotalBranchCount'] = BranchModel::count();
        $data['TotalCourseCount'] = CourseModel::count();
       return view('panel.dashboard', $data);
    }
    public function myprofile(){
       $id = Auth::user()->id;
       $data['getRecord']  = User::getSingle($id);
        return view('panel.myprofile', $data);
    } 

  public function updatemyprofile(Request $request){
  
        $id = Auth::user()->id;
        $updatedata = User::find($id);
       $updatedata->name = trim($request->name);
       $updatedata->email = trim($request->email);
       $updatedata->phone = trim($request->phone);
       $updatedata->address = trim($request->address);
       if($request->file('photo')){
        $file=$request->photo;  
         @unlink(public_path('/upload/'.$updatedata->photo));  
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->photo->move('public/upload/',$filename);
        $updatedata['photo'] = $filename;
      }
       $updatedata->save();

        return redirect('panel/myprofile')->with('success', "Profile successfully created");
    }

   public function changespaassword(){
        $id = Auth::user()->id;
       $data['getRecord']  = User::getSingle($id);
        return view('panel/changespaassword', $data);
    } 

    public function updatepassword(Request $request){
        //validation
        $request->validate([
            'old_password' => 'required',
        'new_password' => 'required|confirmed'

        ]);
        //match password
        if(!Hash::check($request->old_password, auth::user()->password)){

        return back()->with('error', "Old password does not match!");
        }
        // update new pass

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);

        return back()->with('success', "Admin password change successfully");


    }
}
