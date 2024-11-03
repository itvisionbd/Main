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
use HasFactory;
use Hash;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ExamController extends Controller
{
    public function list(){
      $data['getRecord'] = ExamroutineModel::getRecord();
       return view('panel.examroutine.list', $data);
    } 
    public function add(){
      $data['getCourse'] = CourseModel::getRecord();
      $data['getBranch'] = BranchModel::getRecord();
      $data['getSession'] = SessionModel::getRecord();
       return view('panel.examroutine.add', $data);
    }

    public function insert(Request $request){
      
       $examroutine = new ExamroutineModel;
       $examroutine->routine_title = trim($request->routine_title);
       $examroutine->course_id = trim($request->course_id);
       $examroutine->branch_id = trim($request->branch_id);
       $examroutine->session_id = trim($request->session_id);
       $examroutine->exam_date = trim($request->exam_date);
       $examroutine->exam_time = trim($request->exam_time);
       $examroutine->exam_centre = trim($request->exam_centre);
       $examroutine->exam_status = trim($request->exam_status);
       $examroutine->save();
       return redirect('panel/examroutine')->with('success', "Routine successfully created");
    }

    public function edit($id){
      $data['getRecord'] = ExamroutineModel::getSingle($id);
      $data['getCourse'] = CourseModel::getRecord();
      $data['getBranch'] = BranchModel::getRecord();
      $data['getSession'] = SessionModel::getRecord();
       return view('panel.examroutine.edit', $data);
    }


    public function update($id, Request $request){
       $updateSession = ExamroutineModel::getSingle($id);
       $updateSession->routine_title = trim($request->routine_title);
       $updateSession->course_id = trim($request->course_id);
       $updateSession->branch_id = trim($request->branch_id);
       $updateSession->session_id = trim($request->session_id);
       $updateSession->exam_date = trim($request->exam_date);
       $updateSession->exam_time = trim($request->exam_time);
       $updateSession->exam_centre = trim($request->exam_centre);
       $updateSession->exam_status = trim($request->exam_status);
       $updateSession->save();
       return redirect('panel/examroutine')->with('success', "Routine successfully updated");
    }

    public function delete($id){
       $examroutine = ExamroutineModel::getSingle($id);
       $examroutine->delete();
       return redirect('panel/examroutine')->with('success', "Routine successfully deleted");
    }

}
