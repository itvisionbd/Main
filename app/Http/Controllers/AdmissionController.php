<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\BranchModel;
use App\Models\CourseModel;
use App\Models\SessionModel;
use App\Models\ExamroutineModel;
use App\Models\AdmissionModel;
use HasFactory;
use Carbon\Carbon;
use Auth;
use Hash;
use DOMDocument;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdmissionController extends Controller
{ 

// public function list()
// {
//     $user = auth()->user();

//     // Initialize $getRecord array
//     $getRecord = [];

//     // Check user role and fetch data accordingly
//     if ($user->role === 'Admin') {
//         $getRecord = AdmissionModel::where('created_at', '>', Carbon::now()->subMonths(6))
//             ->orderBy('id', 'desc') // Assuming 'id' is the primary key of AdmissionModel
//             ->get();
//     } elseif ($user->role === 'Manager') {
//         $getRecord = AdmissionModel::where('created_at', '>', Carbon::now()->subMonths(8))
//             ->where('user_id', $user->id) // Use $user->id instead of Auth::user()->id
//             ->orderBy('id', 'desc') // Assuming 'id' is the primary key of AdmissionModel
//             ->get();
//     } 
//     // else {
//     //     // Handle unauthorized access or other roles if needed
//     //     abort(403, 'Unauthorized action.');
//     // }

//     // Return the view with fetched data
//     return view('panel.admission.list', compact('getRecord'));
//     }

// public function list()
// {
//     $user = auth()->user();

//     // Initialize $data array
//     $data = [];

//     // Check user role and fetch data accordingly
//     if ($user->role === 'Admin') {
//         $getRecord = AdmissionModel::all();
//     } elseif ($user->role === 'Manager') {
//         $getRecord = AdmissionModel::where('user_id',Auth::user()->id)->get();
//     } 

//     // Return the view with data
//     return view('panel.admission.list', compact('getRecord'));
// }

 
 


    public function list(){
      $data['getRecord'] = AdmissionModel::getRecord();
       return view('panel.admission.list', $data);
    } 
    public function add(){
         $user = auth()->user();
    $branches = [];

    if ($user->role_id === 1) { // Admin
        $branches = BranchModel::all(); // Assuming you have a Branch model to fetch all branches
    } elseif ($user->role_id === 2) { // Manager
        $branches = BranchModel::where('id', $user->branch_id)->get(); // Fetch the branch of the manager
    }
  

      $data['getCourse'] = CourseModel::getRecord();
      
      $data['getSession'] = SessionModel::getRecord();
       return view('panel.admission.add', $data,$branches,$user);
    }

    public function insert(Request $request){
      
       $admission = new AdmissionModel;
       $admission->registrationNo = trim($request->registrationNo);
       $admission->batchNo = trim($request->batchNo);
       $admission->admissionUnder = trim($request->admissionUnder);
       $admission->user_id  = Auth::user()->id;
       $admission->course_id = trim($request->course_id);
       $admission->branch_id = trim($request->branch_id);
       $admission->session_id = trim($request->session_id);
       $admission->year = trim($request->year);
       $admission->roll = trim($request->roll);
       $admission->startDate = trim($request->startDate);
       $admission->endDate = trim($request->endDate);
       $admission->qouta = trim($request->qouta);
       $admission->identity = trim($request->identity);
       $admission->identityNo = trim($request->identityNo);
       //$admission->applicantImage = trim($request->applicantImage);
       $admission->student_name = trim($request->student_name);
       $admission->father_name = trim($request->father_name);
       $admission->mother_name = trim($request->mother_name);
       $admission->education = trim($request->education);
       $admission->gander = trim($request->gander);
       $admission->phone = trim($request->phone);
       $admission->email = trim($request->email);
       $admission->currentAddress = trim($request->currentAddress);
       $admission->permanentAddress = trim($request->permanentAddress);
       $admission->dateOfBirth = trim($request->dateOfBirth);
       $admission->religion = trim($request->religion);
       $admission->maritalStatus = trim($request->maritalStatus);
       $admission->guardianName = trim($request->guardianName);
       $admission->guardianMobile = trim($request->guardianMobile);

      //  if($request->file('applicantImage')){
      //   $file=$request->photo;  
      //    @unlink(public_path('/upload/'.$admission->applicantImage));  
      //   $filename=time().'.'.$file->getClientOriginalExtension();
      //   $request->applicantImage->move('public/upload/',$filename);
      //   $admission['applicantImage'] = $filename;
      // }
       if(!empty($request->file('applicantImage'))){
            $file = $request->file('applicantImage');
            $randomStr = Str::random(30);
            $filename = $randomStr. '.' . $file->getClientOriginalExtension();
            $file->move('public/upload/' , $filename);
            $admission->applicantImage =$filename;
        }



       $admission->save();
       return redirect('panel/admission')->with('success', "Student data successfully created");
    }

    public function edit($id){
      $data['getRecord'] = AdmissionModel::getSingle($id);
      $data['getCourse'] = CourseModel::getRecord();
      $data['getBranch'] = BranchModel::getRecord();
      $data['getSession'] = SessionModel::getRecord();
       return view('panel.admission.edit', $data);
    }


    public function update($id, Request $request){
       $updateAdmission = AdmissionModel::getSingle($id);
       $updateAdmission->registrationNo = trim($request->registrationNo);
       $updateAdmission->batchNo = trim($request->batchNo);
       $updateAdmission->admissionUnder = trim($request->admissionUnder);
       $updateAdmission->course_id = trim($request->course_id);
       $updateAdmission->branch_id = trim($request->branch_id);
       $updateAdmission->session_id = trim($request->session_id);
       $updateAdmission->year = trim($request->year);
       $updateAdmission->roll = trim($request->roll);
       $updateAdmission->startDate = trim($request->startDate);
       $updateAdmission->endDate = trim($request->endDate);
       $updateAdmission->qouta = trim($request->qouta);
       $updateAdmission->identity = trim($request->identity);
       $updateAdmission->identityNo = trim($request->identityNo);
       //$admission->applicantImage = trim($request->applicantImage);
       $updateAdmission->student_name = trim($request->student_name);
       $updateAdmission->father_name = trim($request->father_name);
       $updateAdmission->mother_name = trim($request->mother_name);
       $updateAdmission->education = trim($request->education);
       $updateAdmission->gander = trim($request->gander);
       $updateAdmission->phone = trim($request->phone);
       $updateAdmission->email = trim($request->email);
       $updateAdmission->currentAddress = trim($request->currentAddress);
       $updateAdmission->permanentAddress = trim($request->permanentAddress);
       $updateAdmission->dateOfBirth = trim($request->dateOfBirth);
       $updateAdmission->religion = trim($request->religion);
       $updateAdmission->maritalStatus = trim($request->maritalStatus);
       $updateAdmission->guardianName = trim($request->guardianName);
       $updateAdmission->guardianMobile = trim($request->guardianMobile);

       if($request->file('applicantImage')){
        $file=$request->applicantImage;  
         @unlink(public_path('/upload/'.$updateAdmission->applicantImage));  
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->applicantImage->move('public/upload/',$filename);
        $updateAdmission['applicantImage'] = $filename;
      }
       // if(!empty($request->file('applicantImage'))){
       //      $file = $request->file('applicantImage');
       //      $randomStr = Str::random(30);
       //      $filename = $randomStr. '.' . $file->getClientOriginalExtension();
       //      $file->move('public/upload/' , $filename);
       //      $updateAdmission->applicantImage =$filename;
       //  }

       $updateAdmission->save();
       return redirect('panel/admission')->with('success', "Student Data successfully updated");
    }

    public function delete($id){
       $admission = AdmissionModel::getSingle($id);
       $admission->delete();
       return redirect('panel/admission')->with('success', "Student Data successfully deleted");
    }

// FOr Result Section
    public function search(Request $request){

    $data['getRecord'] = AdmissionModel::getRecord();
       return view('panel.results.list', $data);


}


}
