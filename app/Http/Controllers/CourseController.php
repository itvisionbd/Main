<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\NewsModel;
use App\Models\BranchModel;
use App\Models\NoticeModel;
use App\Models\CourseModel;
use HasFactory;
use Hash;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function list(){
       $data['getRecord'] = CourseModel::getRecord();
       return view('panel.course.list', $data);
    } 
    public function add(){ 
       return view('panel.course.add');
    }

    public function insert(Request $request) {
    	//
       $course = new CourseModel;
       $course_file=$request->course_file;    
		$filename=time().'.'.$course_file->getClientOriginalExtension();
	    $request->course_file->move('public/upload/',$filename);
	    $course->course_file=$filename;
       $course->course_title = trim($request->course_title);
       $course->course_fee = trim($request->course_fee);
       $course->course_type = trim($request->course_type);
       $course->course_instructor = trim($request->course_instructor);
       $course->shortdescription = trim($request->shortdescription);
       $course->longdescription = trim($request->longdescription);
       $course->course_status = trim($request->course_status);
       $course->save();
        return redirect('panel/course')->with('success', "Course successfully created");
    }
    public function edit($id){
      $data['getRecord'] = CourseModel::getSingle($id);
       return view('panel.course.edit', $data);
    }
    public function update(Request $request, $id)
    {    
       $updateCourse = CourseModel::find($id);
       $updateCourse->course_title = trim($request->course_title);
       $updateCourse->course_fee = trim($request->course_fee);
       $updateCourse->course_type = trim($request->course_type);
       $updateCourse->course_instructor = trim($request->course_instructor);
       $updateCourse->shortdescription = trim($request->shortdescription);
       $updateCourse->longdescription = trim($request->longdescription);
       $updateCourse->course_status = trim($request->course_status);
       $course_file=$request->course_file;    
	   $filename=time().'.'.$course_file->getClientOriginalExtension();
	   $request->course_file->move('public/upload/',$filename);
	   $updateCourse->course_file=$filename;
       $updateCourse->save();

        return redirect('panel/course')->with('success', "Course successfully created");
    }
    public function delete($id){
       $course = CourseModel::getSingle($id);
       $course->delete();
       return redirect('panel/course')->with('success', "Course successfully deleted");
    }

}
