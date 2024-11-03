<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\BranchModel;
use App\Models\PagesModel;
use App\Models\ParentPageModel;
use HasFactory;
use Hash;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PagesController extends Controller
{
	  //Start Parent page
    public function parent(){
      $data['getRecord'] = ParentPageModel::getRecord();
       return view('panel.pages.parent', $data);
    } 
    public function parentadd(){
      
       return view('panel.pages.parentadd');
    }

    public function parentinsert(Request $request) {
       $parent = new ParentPageModel;
       $parent->parent_page_name = trim($request->parent_page_name);     
       $parent->save();

        return redirect('panel/pages/parent')->with('success', "Parent Page successfully created");
    }

    
     public function parentedit($id){
      $data['getRecord'] = ParentPageModel::getSingle($id);
       return view('panel.pages.parentedit', $data);
    }

public function parentupdate(Request $request, $id)
    {    
       $updateParent = ParentPageModel::find($id);
       $updateParent->parent_page_name = trim($request->parent_page_name);   
       $updateParent->save();
        return redirect('panel/pages/parent')->with('success', "Parent Page successfully updated");
    }



    public function parentdelete($id){
       $parent = ParentPageModel::getSingle($id);
       $parent->delete();
       return redirect('panel/pages/parent')->with('success', "Parent Page successfully deleted");
    }
    //end Parent page

    //for pages
    public function list(){
      $data['getRecord'] = PagesModel::getRecord();
       return view('panel.pages.list', $data);
    } 
    public function add(){
      $data['getRecord'] = ParentPageModel::getRecord();
       return view('panel.pages.add', $data);
    }

    public function insert(Request $request) {
       $pages = new PagesModel;
       $pages->pages_name = trim($request->pages_name);
       $pages->parent_page_id = trim($request->parent_page_id);
       $pages->shortdescription = trim($request->shortdescription);
       $pages->longdescription = trim($request->longdescription);
       $pages->pages_status = trim($request->pages_status);
        
        if(!empty($request->file('pages_file'))){
            $file = $request->file('pages_file');
            $randomStr = Str::random(30);
            $filename = $randomStr. '.' . $file->getClientOriginalExtension();
            $file->move('public/upload/' , $filename);
            $pages->pages_file =$filename;
        }

        
       $pages->save();

        return redirect('panel/pages')->with('success', "Pages successfully created");
    }
    public function edit($id){
      $data['getRecord'] = PagesModel::getSingle($id);
      $data['getParent'] = ParentPageModel::getRecord($id);
       return view('panel.pages.edit', $data);
    }

public function update(Request $request, $id)
    {    
       $updatePage = PagesModel::find($id);
       $updatePage->pages_name = trim($request->pages_name);
       $updatePage->parent_page_id = trim($request->parent_page_id);
       $updatePage->shortdescription = trim($request->shortdescription);
       $updatePage->longdescription = trim($request->longdescription);
       $updatePage->pages_status = trim($request->pages_status);
        
        if(!empty($request->file('pages_file'))){

            if(!empty($updatePage->pages_file) && file_exists('public/upload/' .$updatePage->pages_file)){
                unlink('public/upload/' .$updatePage->pages_file);
            }

            $file = $request->file('pages_file');
            $randomStr = Str::random(30);
            $filename = $randomStr. '.' . $file->getClientOriginalExtension();
            $file->move('public/upload/' , $filename);
            $updatePage->pages_file =$filename;
        }


        
       $updatePage->save();

        return redirect('panel/pages')->with('success', "Pages successfully updated");
    }



    public function delete($id){
       $pages = PagesModel::getSingle($id);
       $pages->delete();
       return redirect('panel/pages')->with('success', "Pages successfully deleted");
    }

}
