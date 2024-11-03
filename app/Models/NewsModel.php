<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
    protected $table ='news';
    static public function getSingle($id)
    {
        return NewsModel::find($id);
    }


    static public function getRecord()
    {
        return NewsModel::select('news.*', 'branches.branch_name as branch_id')
                    ->join('branches', 'branches.id', '=', 'news.branch_id')
                    ->orderBy('news.id', 'desc')->get();
    }
    static public function getNewsMenu(){
        return  NewsModel::select('news.*')
                    ->where('news_status', '=','Publish')
                    ->orderBy('news.id', 'desc')->get();
    }
     static public function getNews($id){
        return NewsModel::find($id);
    }
    static public function getFrontNews()
    {
         return NewsModel::select('news.*', 'branches.branch_name as branch_id')
                    ->join('branches', 'branches.id', '=', 'news.branch_id')
                    ->orderBy('news.id', 'desc')->get();

        // return AdmissionModel::select('admission.*', 'course.course_title as course_id', 'branches.branch_name as branch_id', 'session.session_title as session_id')
        //             ->join('course', 'course.id', '=', 'admission.course_id')
        //             ->join('branches', 'branches.id', '=', 'admission.branch_id')
        //             ->join('session', 'session.id', '=', 'admission.session_id')
        //             ->orderBy('admission.id', 'desc')->get();
    }


}
