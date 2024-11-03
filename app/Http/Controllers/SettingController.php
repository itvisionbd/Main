<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\NewsModel;
use App\Models\BranchModel;
use App\Models\NoticeModel;
use App\Models\HeaderModel;
use App\Models\FooterModel;
use App\Models\MinistryModel;
use HasFactory;
use Hash;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    
    // public function headeredit(){
    //   $headerData = HeaderModel::find(1);
    //    return view('panel.setting.header', $headerData);
    // }
    public function headeredit(){
      $data['getRecord'] = HeaderModel::getSingle();
       return view('panel.setting.header', $data);
    }

    public function headerupdate(Request $request)
    {    
       $updateHeader = HeaderModel::find(1);
       $updateHeader->main_title = trim($request->main_title);
       $updateHeader->description = trim($request->description);
       $updateHeader->email = trim($request->email);
       $updateHeader->address = trim($request->address);


       if($request->file('main_logo')){
        $file=$request->main_logo;  
         @unlink(public_path('/upload/'.$updateHeader->main_logo));  
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->main_logo->move('public/upload/',$filename);
        $updateHeader['main_logo'] = $filename;

      } 
      if($request->file('favicon_icon')){
        $file=$request->favicon_icon;  
         @unlink(public_path('/upload/'.$updateHeader->favicon_icon));  
        $favicon_icon=time().'.'.$file->getClientOriginalExtension();
        $request->favicon_icon->move('public/upload/',$favicon_icon);
        $updateHeader['favicon_icon'] = $favicon_icon;
      } 
		
       $updateHeader->save();

        return redirect('panel/setting/header')->with('success', "Header successfully Updated");
    }
  public function footeredit(){
      $data['getRecord'] = FooterModel::getSingle();
       return view('panel.setting.footer', $data);
    }

    public function footerupdate(Request $request)
    {    
       $updateFooter = FooterModel::find(1);
       $updateFooter->copyright = trim($request->copyright);
       $updateFooter->phone = trim($request->phone);
       $updateFooter->fb_page = trim($request->fb_page);
       $updateFooter->youtube = trim($request->youtube);
       $updateFooter->save();

        return redirect('panel/setting/footer')->with('success', "Footer successfully Updated");
    }

    public function ministryedit(){
      $data['getRecord'] = MinistryModel::getSingle();
       return view('panel.setting.ministry', $data);
    }

    public function ministryupdate(Request $request)
    {    
       $updateMinistry = MinistryModel::find(1);
       $updateMinistry->ministry_one_title = trim($request->ministry_one_title);
       $updateMinistry->ministry_two_title = trim($request->ministry_two_title);
       $updateMinistry->ministry_three_title = trim($request->ministry_three_title);

       if($request->file('ministry_one_pic')){
        $file=$request->ministry_one_pic;  
         @unlink(public_path('/upload/'.$updateMinistry->ministry_one_pic));  
        $filename=time().'.'.$file->getClientOriginalExtension(13);
        $request->ministry_one_pic->move('public/upload/',$filename);
        $updateMinistry['ministry_one_pic'] = $filename;

      } 
      if($request->file('ministry_two_pic')){
        $file=$request->ministry_two_pic;  
         @unlink(public_path('/upload/'.$updateMinistry->ministry_two_pic));  
        $ministry_two_pic=time().'.'.$file->getClientOriginalExtension(11);
        $request->ministry_two_pic->move('public/upload/',$ministry_two_pic);
        $updateMinistry['ministry_two_pic'] = $ministry_two_pic;
      } 

      if($request->file('ministry_three_pic')){
        $file=$request->ministry_three_pic;  
         @unlink(public_path('/upload/'.$updateMinistry->ministry_three_pic));  
        $ministry_three_pic=time().'.'.$file->getClientOriginalExtension(10);
        $request->ministry_three_pic->move('public/upload/',$ministry_three_pic);
        $updateMinistry['ministry_three_pic'] = $ministry_three_pic;
      }

		
       $updateMinistry->save();

        return redirect('panel/setting/ministry')->with('success', "Ministry successfully Updated");
    }


}
