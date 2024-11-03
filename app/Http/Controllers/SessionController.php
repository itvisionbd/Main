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
use App\Models\SessionModel;


class SessionController extends Controller
{
    public function list(){
       $data['getRecord'] = SessionModel::getRecord();
       return view('panel.session.list', $data);
    } 
    public function add(){ 
       return view('panel.session.add');
    }

    public function insert(Request $request) {
       $session = new SessionModel;
       $session->session_title = trim($request->session_title);
       $session->session_status = trim($request->session_status);
       $session->save();
        return redirect('panel/session')->with('success', "Session successfully created");
    }
    public function edit($id){
      $data['getRecord'] = SessionModel::getSingle($id);
       return view('panel.session.edit', $data);
    }
    public function update(Request $request, $id)
    {    
       $updateSession = SessionModel::find($id);
       $updateSession->session_title = trim($request->session_title);
       $updateSession->session_status = trim($request->session_status);
       $updateSession->save();
        return redirect('panel/session')->with('success', "Session successfully created");
    }
    public function delete($id){
       $session = SessionModel::getSingle($id);
       $session->delete();
       return redirect('panel/session')->with('success', "Session successfully deleted");
    }

}
