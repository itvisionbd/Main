<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\BranchModel;
use App\Models\NewsModel;
use HasFactory;
use Hash;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;





class BranchController extends Controller
{
    public function list(){
      $data['getRecord'] = BranchModel::getRecord();
       return view('panel.branch.list', $data);
    } 
    public function add(){
      
       return view('panel.branch.add');
    }

      

    public function insert(Request $request) {
       $branch = new BranchModel;
       $branch->branch_name = trim($request->branch_name);
       $branch->branch_district = trim($request->branch_district);
       $branch->shortdescription = trim($request->shortdescription);
       $branch->longdescription = trim($request->longdescription);
       $branch->branch_status = trim($request->branch_status);
        
        if(!empty($request->file('branch_file'))){
            $file = $request->file('branch_file');
            $randomStr = Str::random(30);
            $filename = $randomStr. '.' . $file->getClientOriginalExtension();
            $file->move('public/upload/' , $filename);
            $branch->branch_file =$filename;
        }

        
       $branch->save();

        return redirect('panel/branch')->with('success', "Branch successfully created");
    }

    
     public function edit($id){
      $data['getRecord'] = BranchModel::getSingle($id);
       return view('panel.branch.edit', $data);
    }

public function update(Request $request, $id)
    {    
        $updateBranch = BranchModel::find($id);
       $updateBranch->branch_name = trim($request->branch_name);
       $updateBranch->branch_district = trim($request->branch_district);
       $updateBranch->shortdescription = trim($request->shortdescription);
       $updateBranch->longdescription = trim($request->longdescription);
       $updateBranch->branch_status = trim($request->branch_status);
        
        if(!empty($request->file('branch_file'))){

            if(!empty($updateBranch->branch_file) && file_exists('public/upload/' .$updateBranch->branch_file)){
                unlink('public/upload/' .$updateBranch->branch_file);
            }

            $file = $request->file('branch_file');
            $randomStr = Str::random(30);
            $filename = $randomStr. '.' . $file->getClientOriginalExtension();
            $file->move('public/upload/' , $filename);
            $updateBranch->branch_file =$filename;
        }


        
       $updateBranch->save();

        return redirect('panel/branch')->with('success', "Branch successfully created");
    }



    public function delete($id){
       $branch = BranchModel::getSingle($id);
       $branch->delete();
       return redirect('panel/branch')->with('success', "Branch successfully deleted");
    }

}
