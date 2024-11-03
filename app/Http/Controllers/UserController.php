<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\BranchModel;
use Hash;

class UserController extends Controller
{
    public function list(){
      $data['getRecord'] = User::getRecord();
       return view('panel.user.list', $data);
    } 
    public function add(){
      $data['getRole'] = RoleModel::getRecord();
      $data['getBranch'] = BranchModel::getRecord();
       return view('panel.user.add', $data);
    }

    public function insert(Request $request){

      request()->validate([
         'email'=> 'required|email|unique:users',
      ]);
       $user = new User;
       $user->name = trim($request->name);
       $user->email = trim($request->email);
       $user->password = Hash::make($request->password);
       $user->branch_id = trim($request->branch_id);
       $user->role_id = trim($request->role_id);
       $user->status = trim($request->status);
       $user->save();
       return redirect('panel/user')->with('success', "User successfully created");
    }
 
    public function edit($id){
      $data['getRecord'] = User::getSingle($id);
      $data['getRole'] = RoleModel::getRecord();
      $data['getBranch'] = BranchModel::getRecord();
       return view('panel.user.edit', $data);
    }


    public function update($id, Request $request){
       $user = User::getSingle($id);
       $user->name = trim($request->name);
       if(!empty($request->password))
       {
         $user->password = Hash::make($request->password);
       }
       $user->role_id = trim($request->role_id);
       $user->branch_id = trim($request->branch_id);
       $user->status = trim($request->status);
       $user->save();
       return redirect('panel/user')->with('success', "User successfully updated");
    }

    public function delete($id){
       $user = User::getSingle($id);
       $user->delete();
       return redirect('panel/user')->with('success', "User successfully deleted");
    }

}
