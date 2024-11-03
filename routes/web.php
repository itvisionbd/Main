<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\BranchController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Models\AdmissionModel;

//For Frontend useonly
use App\Http\Controllers\HomeController;



// Route::get('/', function () {
//     return view('home.index');
// });

// Route::get('/index',function () {
//     return view('home.index');

// });
 
Route::get('/',[HomeController::class, 'home']);
Route::get('page/{id}',[HomeController::class, 'page']);
Route::get('notice/{id}',[HomeController::class, 'notice']);
Route::get('course/{id}',[HomeController::class, 'course']);
Route::get('news',[HomeController::class, 'news']);
Route::get('newsdetails/{id}',[HomeController::class, 'newsdetails']);
Route::get('branch/{id}',[HomeController::class, 'branch']);
Route::get('branchdetails/{id}',[HomeController::class, 'branchdetails']);




Route::get('certificateverify', [HomeController::class, 'search']);
Route::get('certificateverify',[HomeController::class, 'certificateverify']);



Route::get('/search', [HomeController::class, 'search'])->name('search');

//Route::get('/search', 'HomeController@search')->name('home.search');
 //Route::get('search',[HomeController::class, 'search']);






//Route::post('certificateverify',[HomeController::class, 'searchcertificate']);
// Route::get('searchcertificate',[HomeController::class, 'searchcertificate']);


Route::get('members',[HomeController::class, 'members']);
Route::get('jobholder',[HomeController::class, 'jobholder']);
Route::get('successstory',[HomeController::class, 'successstory']);
Route::get('forum',[HomeController::class, 'forum']);
Route::get('contact',[HomeController::class, 'contact']);



// Route::post ( '/certificateverify', function () {
// 	$q = Input::get ( 'q' );
// 	if($q != ""){
// 		$student = AdmissionModel::where ( 'registrationNo', 'LIKE', '%' . $q . '%' )->orWhere ( 'phone', 'LIKE', '%' . $q . '%' )->get ();
// 		if (count ( $student ) > 0)
// 			return view ( 'certificateverify' )->withDetails ( $student )->withQuery ( $q );
// 		else
// 			return view ( 'certificateverify' )->withMessage ( 'No Details found. Try to search again !' );
// 	}
// 	return view ( 'certificateverify' )->withMessage ( 'No Details found. Try to search again !' );
// } );








//AuthController
Route::get('/panel',[AuthController::class, 'login']);
Route::post('/panel',[AuthController::class, 'auth_login']);


Route::get('logout',[AuthController::class, 'logout']);

//middleware
Route::group(['middleware' => 'useradmin'], function(){
Route::get('panel/dashboard',[DashboardController::class, 'dashboard']);
Route::get('panel/myprofile',[DashboardController::class, 'myprofile']);
Route::post('panel/myprofile',[DashboardController::class, 'updatemyprofile']);
Route::get('panel/changespaassword',[DashboardController::class, 'changespaassword']);
Route::post('panel/changespaassword',[DashboardController::class, 'updatepassword']);

//RoleController
Route::get('panel/role',[RoleController::class, 'list']);
Route::get('panel/role/add',[RoleController::class, 'add']);
Route::post('panel/role/add',[RoleController::class, 'insert']);
Route::get('panel/role/edit/{id}',[RoleController::class, 'edit']);
Route::post('panel/role/edit/{id}',[RoleController::class, 'update']);
Route::get('panel/role/delete/{id}',[RoleController::class, 'delete']);
//

//UserController
Route::get('panel/user',[UserController::class, 'list']);
Route::get('panel/user/add',[UserController::class, 'add']);
Route::post('panel/user/add',[UserController::class, 'insert']);
Route::get('panel/user/edit/{id}',[UserController::class, 'edit']);
Route::post('panel/user/edit/{id}',[UserController::class, 'update']);
Route::get('panel/user/delete/{id}',[UserController::class, 'delete']);
//

//News Controller
Route::get('panel/news',[NewsController::class, 'list']);
Route::get('panel/news/add',[NewsController::class, 'add']);
Route::post('panel/news/add',[NewsController::class, 'insert']);
Route::get('panel/news/edit/{id}',[NewsController::class, 'edit']);
Route::post('panel/news/edit/{id}',[NewsController::class, 'update']);
Route::get('panel/news/delete/{id}',[NewsController::class, 'delete']);
//

//Notice Controller
Route::get('panel/notice',[NoticeController::class, 'list']);
Route::get('panel/notice/add',[NoticeController::class, 'add']);
Route::post('panel/notice/add',[NoticeController::class, 'insert']);
Route::get('panel/notice/edit/{id}',[NoticeController::class, 'edit']);
Route::post('panel/notice/edit/{id}',[NoticeController::class, 'update']);
Route::get('panel/notice/delete/{id}',[NoticeController::class, 'delete']);
//

//Notice Controller
Route::get('panel/admission',[AdmissionController::class, 'list']);
Route::get('panel/admission/add',[AdmissionController::class, 'add']);
Route::post('panel/admission/add',[AdmissionController::class, 'insert']);
Route::get('panel/admission/edit/{id}',[AdmissionController::class, 'edit']);
Route::post('panel/admission/edit/{id}',[AdmissionController::class, 'update']);
Route::get('panel/admission/delete/{id}',[AdmissionController::class, 'delete']);
//

//Results Controller
 Route::get('panel/results',[AdmissionController::class, 'search']);
//Route::get("panel/results",[AdmissionController::class,'search']);
// Route::get('panel/results/add',[AdmissionController::class, 'resultadd']);
// Route::post('panel/results/add',[AdmissionController::class, 'insert']);
// Route::get('panel/results/edit/{id}',[AdmissionController::class, 'edit']);
// Route::post('panel/results/edit/{id}',[AdmissionController::class, 'update']);
// Route::get('panel/results/delete/{id}',[AdmissionController::class, 'delete']);
//

///////


//////
//Course Controller
Route::get('panel/course',[CourseController::class, 'list']);
Route::get('panel/course/add',[CourseController::class, 'add']);
Route::post('panel/course/add',[CourseController::class, 'insert']);
Route::get('panel/course/edit/{id}',[CourseController::class, 'edit']);
Route::post('panel/course/edit/{id}',[CourseController::class, 'update']);
Route::get('panel/course/delete/{id}',[CourseController::class, 'delete']);
//

//Session Controller
Route::get('panel/session',[SessionController::class, 'list']);
Route::get('panel/session/add',[SessionController::class, 'add']);
Route::post('panel/session/add',[SessionController::class, 'insert']);
Route::get('panel/session/edit/{id}',[SessionController::class, 'edit']);
Route::post('panel/session/edit/{id}',[SessionController::class, 'update']);
Route::get('panel/session/delete/{id}',[SessionController::class, 'delete']);
//

//Exam Controller
Route::get('panel/examroutine',[ExamController::class, 'list']);
Route::get('panel/examroutine/add',[ExamController::class, 'add']);
Route::post('panel/examroutine/add',[ExamController::class, 'insert']);
Route::get('panel/examroutine/edit/{id}',[ExamController::class, 'edit']);
Route::post('panel/examroutine/edit/{id}',[ExamController::class, 'update']);
Route::get('panel/examroutine/delete/{id}',[ExamController::class, 'delete']);
//

//branch Controller
Route::get('panel/branch',[BranchController::class, 'list']);
Route::get('panel/branch/add',[BranchController::class, 'add']);
Route::post('panel/branch/add',[BranchController::class, 'insert']);
Route::get('panel/branch/edit/{id}',[BranchController::class, 'edit']);
Route::post('panel/branch/edit/{id}',[BranchController::class, 'update']);
Route::get('panel/branch/delete/{id}',[BranchController::class, 'delete']);
//

//pages Controller
Route::get('panel/pages/parent',[PagesController::class, 'parent']);
Route::get('panel/pages/parentadd',[PagesController::class, 'parentadd']);
Route::post('panel/pages/parentadd',[PagesController::class, 'parentinsert']);
Route::get('panel/pages/parentedit/{id}',[PagesController::class, 'parentedit']);
Route::post('panel/pages/parentedit/{id}',[PagesController::class, 'parentupdate']);
Route::get('panel/pages/parentdelete/{id}',[PagesController::class, 'parentdelete']);
//

Route::get('panel/pages',[PagesController::class, 'list']);
Route::get('panel/pages/add',[PagesController::class, 'add']);
Route::post('panel/pages/add',[PagesController::class, 'insert']);
Route::get('panel/pages/edit/{id}',[PagesController::class, 'edit']);
Route::post('panel/pages/edit/{id}',[PagesController::class, 'update']);
Route::get('panel/pages/delete/{id}',[PagesController::class, 'delete']);
//

//Setting Controller
Route::get('panel/setting/header',[SettingController::class, 'headeredit']);
Route::post('panel/setting/header',[SettingController::class, 'headerupdate']);
Route::get('panel/setting/footer',[SettingController::class, 'footeredit']);
Route::post('panel/setting/footer',[SettingController::class, 'footerupdate']);
Route::get('panel/setting/ministry',[SettingController::class, 'ministryedit']);
Route::post('panel/setting/ministry',[SettingController::class, 'ministryupdate']);

//slider Controller
Route::get('panel/slider',[SliderController::class, 'list']);
Route::get('panel/slider/add',[SliderController::class, 'add']);
Route::post('panel/slider/add',[SliderController::class, 'insert']);
Route::get('panel/slider/edit/{id}',[SliderController::class, 'edit']);
Route::post('panel/slider/edit/{id}',[SliderController::class, 'update']);
Route::get('panel/slider/delete/{id}',[SliderController::class, 'delete']);
//



//

});

Route::group(['middleware' => 'useradmin'], function(){


	
});
