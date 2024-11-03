<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\NewsModel;
use App\Models\BranchModel;
use HasFactory;
use Hash;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function list(){
       $data['getRecord'] = NewsModel::getRecord();
       return view('panel.news.list', $data);
    } 
    public function add(){ 
      $data['getNews'] = BranchModel::getRecord();
       return view('panel.news.add', $data);
    }

    public function insert(Request $request) {
       $news = new NewsModel;
       
       $news_file=$request->news_file;    
        $filename=time().'.'.$news_file->getClientOriginalExtension();
        $request->news_file->move('public/upload/',$filename);
        $news->news_file=$filename;

       $news->news_title = trim($request->news_title);
       $news->branch_id = trim($request->branch_id);
       // $news->user_id = trim($request->user_id);
       $news->news_shortdescription = trim($request->news_shortdescription);
       $news->news_longdescription = trim($request->news_longdescription);
       $news->news_status = trim($request->news_status);
        
        // if(!empty($request->file('news_file'))){
        //     $file = $request->file('news_file');
        //     $randomStr = Str::random(30);
        //     $filename = $randomStr. '.' . $file->getClientOriginalExtension();
        //     $file->move('public/upload/' , $filename);
        //     $news->news_file =$filename;
        // }
        
       $news->save();
        return redirect('panel/news')->with('success', "News successfully created");
    }

    public function edit($id){
      $data['getRecord'] = NewsModel::getSingle($id);
      $data['getBranch'] = BranchModel::getRecord($id);
       return view('panel.news.edit', $data);
    }

    public function update(Request $request, $id)
    {    
        $updateNews = NewsModel::find($id);
       $updateNews->news_title = trim($request->news_title);
       $updateNews->branch_id = trim($request->branch_id);
       $updateNews->news_shortdescription = trim($request->news_shortdescription);
       $updateNews->news_longdescription = trim($request->news_longdescription);
       $updateNews->news_status = trim($request->news_status);
        
        $news_file=$request->news_file;    
        $filename=time().'.'.$news_file->getClientOriginalExtension();
        $request->news_file->move('public/upload/',$filename);
        $updateNews->news_file=$filename;
       $updateNews->save();

        return redirect('panel/news')->with('success', "News successfully created");
    }
    public function delete($id){
       $user = NewsModel::getSingle($id);
       $user->delete();
       return redirect('panel/news')->with('success', "News successfully deleted");
    }

}
