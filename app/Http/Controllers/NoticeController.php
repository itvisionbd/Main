<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\NewsModel;
use App\Models\BranchModel;
use App\Models\NoticeModel;
use HasFactory;
use Auth;
use Hash; 
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NoticeController extends Controller
{ 
    
    public function list(){
       $data['getRecord'] = NoticeModel::getRecord();
       return view('panel.notice.list', $data);
    } 

    public function add(){ 
      $data['getBranch'] = BranchModel::getRecordUser();
       return view('panel.notice.add', $data);
    }

   // static public function getnotice(){
   //  $data['getNotice'] = NoticeModel::getNotice();
   //     return view('home.index', $data);
   //  }

    public function insert(Request $request) {
       $notice = new NoticeModel;
       $news_file=$request->news_file;    
		$filename=time().'.'.$news_file->getClientOriginalExtension();
	    $request->news_file->move('public/upload/',$filename);
	    $notice->news_file=$filename;
       $notice->news_title = trim($request->news_title);
       $notice->branch_id = trim($request->branch_id);
       $notice->user_id  = Auth::user()->id;
       $notice->news_shortdescription = trim($request->news_shortdescription);
       $notice->news_longdescription = trim($request->news_longdescription);
       $notice->news_status = trim($request->news_status);        
       $notice->save();
        return redirect('panel/notice')->with('success', "Notice successfully created");
    }

    public function edit($id){
      $data['getRecord'] = NoticeModel::getSingle($id);
      $data['getBranch'] = BranchModel::getRecord($id);
       return view('panel.notice.edit', $data);
    }

    public function update(Request $request, $id)
    {    
       $updateNotice = NoticeModel::find($id);
       $updateNotice->news_title = trim($request->news_title);
       $updateNotice->branch_id = trim($request->branch_id);
       $updateNotice->news_shortdescription = trim($request->news_shortdescription);
       $updateNotice->news_longdescription = trim($request->news_longdescription);
       $updateNotice->news_status = trim($request->news_status);
        $news_file=$request->news_file;    
		$filename=time().'.'.$news_file->getClientOriginalExtension();
	    $request->news_file->move('public/upload/',$filename);
	    $updateNotice->news_file=$filename;
       $updateNotice->save();
        return redirect('panel/notice')->with('success', "Notice successfully created");
    }

    public function delete($id){
       $user = NoticeModel::getSingle($id);
       $user->delete();
       return redirect('panel/notice')->with('success', "Notice successfully deleted");
    }

}
