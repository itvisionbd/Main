<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use App\Models\RoleModel;
use App\Models\BranchModel;
use DB;

class AdmissionModel extends Model
{
    use HasFactory;
    protected $table ='admission';

    static public function getSingle($id)
    {
        return AdmissionModel::find($id);
    }




// static public function getRecord()
// {
//     $user = auth()->user();
//     $getAdmission = [];

//     if ($user->role_id === 1) { // Admin role
//         $getAdmission = AdmissionModel::orderBy('admission.id', 'desc')->get();
//     } elseif ($user->role_id === 8) { // Manager role
//         $branch_id = $user->branch_id; // Assuming branch_id is stored in the user's profile
//         $getAdmission = AdmissionModel::where('branch_id', $branch_id)
//             // ->where('user_id', $userId)
//             ->orderBy('admission.id', 'desc')
//             ->get();
//     } elseif ($user->role_id === 3) { // User role
//         $getAdmission = AdmissionModel::where('user_id', $user->id)
//             ->orderBy('admission.id', 'desc')
//             ->get();
//     }

//     return $getAdmission;
// }


    static public function getRecord()
{
    $user = auth()->user();
    $userId = $user->id;
    // $branchId = BranchModel::find($id);
    $getAdmission = [];

    if ($user->role_id === 1) {
        $getAdmission = AdmissionModel::select('admission.*')
            ->orderBy('admission.id', 'desc')
            ->get();
    } elseif ($user->role_id === 8 ) {
        $getAdmission = AdmissionModel::where('created_at', '>', Carbon::now()->subMonths(8))
            ->where('user_id', '=','role_id')
            ->orderBy('id', 'desc')
            ->get();
    }

    return $getAdmission;
}



// static public function getRecord($branch_id)
// {
//     $user = auth()->user();
//     $userId = $user->id;
//     $getAdmission = [];

//     if ($user->role_id === 1) {
//         $getAdmission = AdmissionModel::select('admission.*')
//             ->orderBy('admission.id', 'desc')
//             ->get();
//     } elseif ($user->role_id === 2 && $userId === $branch_id) {
//         $getAdmission = AdmissionModel::where('created_at', '>', Carbon::now()->subMonths(8))
//             ->where('user_id', $userId)
//             ->orderBy('id', 'desc')
//             ->get();
//     }

//     return $getAdmission;
// }



//     static public function getRecord()
// {
//     $user = auth()->user();
//     $userId = $user->id;
//     $getAdmission = [];

//     if ($user->role_id === 1) {
//         $getAdmission = AdmissionModel::select('admission.*')
            
//             ->orderBy('admission.id', 'desc')
//             ->get();
//     } elseif ($user->role_id === 2 && $userId===$branch_id) {
//         $getAdmission = AdmissionModel::where('created_at', '>', Carbon::now()->subMonths(8))
//             ->where('user_id', $userId)
//             ->orderBy('id', 'desc')
//             ->get();
//     }

//     return $getAdmission;
// }



//     static public function getRecord()
//     {
//          $user = auth()->user();
//     // Initialize $data array
//     $getAdmission = [];
//     // Check user role and fetch data accordingly
//     if ($user->role_id =='1' && $user->user_id==='role_id') {
//        $getAdmission = AdmissionModel::select('admission.*')
//                         ->where('user_id',Auth::user()->id)
//                         ->where('role_id','=',Auth::user()->id)
//                        ->orderBy('admission.id', 'desc')->get();
//     } elseif ($user->role_id ==2) {
//          $getAdmission = AdmissionModel::where("created_at",">", Carbon::now()->subMonths(8))
//            ->where('user_id',Auth::user()->id)
//            ->orderBy('id', 'desc')->get();
//     } 

    
//        return $getAdmission;
// }


//static public function getRecord()
//     {
//          $user = auth()->user();
//     // Initialize $data array
//     $getAdmission = [];
//     // Check user role and fetch data accordingly
//     if ($user->role === 'Admin') {
//        $getAdmission = AdmissionModel::where("created_at",">", Carbon::now()->subMonths(8))

//            ->orderBy('id', 'desc')->get();
//     } elseif ($user->role === 'Manager') {
//          $getAdmission = AdmissionModel::where("created_at",">", Carbon::now()->subMonths(8))
//            ->where('user_id',Auth::user()->id)
//            ->orderBy('id', 'desc')->get();
//     } 

//       // $getAdmission = AdmissionModel::where("created_at",">", Carbon::now()->subMonths(8))
//          //   ->where('user_id',Auth::user()->id)
//          //   ->orderBy('id', 'desc')->get();

//         // select('*')
//         // ->whereBetween('created_at',
//         // [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])
//         // ->get();

//        return $getAdmission;
// }





// static public function getRecord()
// {
//     $user = auth()->user();

//     // Initialize $getAdmission array
//     $getAdmission = [];

//     // Check user role and fetch data accordingly
//     if ($user->role === 'Admin') {
//         $getAdmission = AdmissionModel::where('created_at', '>', Carbon::now()->subMonths(6))
//             ->orderBy('id', 'desc') // Assuming 'id' is the primary key of AdmissionModel
//             ->get();
//     } elseif ($user->role === 'Manager') {
//         $getAdmission = AdmissionModel::where('created_at', '>', Carbon::now()->subMonths(8))
//             ->where('user_id', $user->id) // Use $user->id instead of Auth::user()->id
//             ->orderBy('id', 'desc') // Assuming 'id' is the primary key of AdmissionModel
//             ->get();
//     }

//     // Return the fetched data
//     return $getAdmission;
// }








   static public function ManagerData()
    {
        $getAdmission = AdmissionModel::where('user_id', $user->id)->get();

       return $getAdmission;
}









        // return AdmissionModel::select('admission.*', 'course.course_title as course_id', 'branches.branch_name as branch_id', 'session.session_title as session_id')
        //             ->join('course', 'course.id', '=', 'admission.course_id')
        //             ->join('branches', 'branches.id', '=', 'admission.branch_id')
        //             ->join('session', 'session.id', '=', 'admission.session_id')
        //             ->orderBy('admission.id', 'desc')->get();
    


    // static public function getRecord()
    // {
    // 	$if($request->ajax()){
    //     $data=AdmissionModel::where('id','like','%'.$request->search.'%')
    //     ->orwhere('registrationNo','like','%'.$request->search.'%')
    //     ->orwhere('student_name','like','%'.$request->search.'%')->get()
    //     $results='';
    // if(count($data)>0){

    //      $results ='
    //         <table class="table">
    //         <thead>
    //         <tr>
    //             <th scope="col">#</th>
    //             <th scope="col">registrationNo</th>
    //             <th scope="col">student_name</th>
    //         </tr>
    //         </thead>
    //         <tbody>';

    //             foreach($data as $row){
    //                 $results .='
    //                 <tr>
    //                 <th scope="row">'.$row->id.'</th>
    //                 <td>'.$row->registrationNo.'</td>
    //                 <td>'.$row->student_name.'</td>
    //                 </tr>
    //                 ';
    //             }
    //      $results .= '
    //          </tbody>
    //         </table>';
    // }
    // else{
    //     $results .='No results';
    // }
    // return $results;

    // }


  } 

