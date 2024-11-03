<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HeaderModel;
use App\Models\NoticeModel;
use App\Models\PagesModel;
use App\Models\CourseModel;
use App\Models\NewsModel;
use App\Models\BranchModel;
use App\Models\AdmissionModel;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
  
    public function home() 
    {
        $data['getNotice'] = NoticeModel::getRecordFront();
        return view('home.index', $data);
    }

    public function page($id)

    { $data['getRecord'] = PagesModel::getPage($id);
        return view('home.page', $data);
    }
    public function notice($id)
    { $data['getRecord'] = NoticeModel::getNotice($id);
        return view('home.notice', $data);
    }
    public function course($id)
    { $data['getRecord'] = CourseModel::getCourse($id);
        return view('home.course', $data);
    }
    public function news()
    {
        $data['getNews'] = NewsModel::getFrontNews();
        return view('home.news', $data);
    }
    public function newsdetails($id)
    {
        $data['getNews'] = NewsModel::getNews($id);
        return view('home.newsdetails', $data);
    }

    // public function result()
    // {
    //     $data['getRecord'] = NewsModel::getNews($id);
    //     return view('home.result', $data);
    // }
    public function branch($id)
    {   $data['getRecord'] = BranchModel::getBranch($id);
        return view('home.branch', $data);
    }
    // public function branchdetails() 
    // {
    //     return view('home.branchdetails');
    // }


// public function search(Request $request)
// {
//     $query = $request->input('query');
//     $results = AdmissionModel::where('title', 'LIKE', "%$query%")
//         ->orWhere('content', 'LIKE', "%$query%")
//         ->orderBy('created_at', 'desc')
//         ->get();

//     return view('searchResults', compact('results', 'query'));
// }

////
    public function certificateverify()
    { $admissions = AdmissionModel::where("created_at",">", Carbon::now()->subMonths(3))
           
           ->orderBy('id', 'desc')->get();
        
        return view('home.certificateverify', compact('admissions'));
    }

//     public function search(Request $request)
// {
//     $search = $request->search;
//     $query = AdmissionModel::query();
//     $query -> whereAny(['registrationNo','phone'], 'like', "%$search%");
//     $admissions = $query->get();

//     return view('home.search', $admissions);
// }





public function search(Request $request)
{
    $query = $request->input('query');
    // $results = AdmissionModel::where('registrationNo', 'LIKE', "%$query%")
    //     ->orWhere('phone', 'LIKE', "%$query%")
    //     ->get();


        $results = AdmissionModel::select('admission.*', 'course.course_title as course_id', 'branches.branch_name as branch_id' , 'session.session_title as session_id')
        ->join('course', 'course.id', '=', 'admission.course_id')
        ->join('branches', 'branches.id', '=', 'admission.branch_id')
        ->join('session', 'session.id', '=', 'admission.session_id')
        ->where('admission.registrationNo', 'LIKE', "%$query%")
        ->orWhere('admission.phone', 'LIKE', "%$query%")
        ->get();

    return view('home.searchResults', compact('results', 'query'));
}


// return DoctorsModel::select('doctors.*', 'department.department_name as department_id')
//                     ->join('department', 'department.id', '=', 'doctors.department_id')
//                     ->orderBy('doctors.id', 'asc')->get();









    public function members()
    {
        return view('home.members');
    }
    public function jobholder()
    {
        return view('home.jobholder');
    }
    public function successstory()
    {
        return view('home.successstory');
    }
    public function contact()
    {
        return view('home.contact');
    }



}
