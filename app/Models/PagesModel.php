<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParentPageModel;

class PagesModel extends Model
{
    use HasFactory;
    protected $table ='pages';
    public $fillable = ['pages_name', 'parent_page_id', 'shortdescription', 'longdescription','pages_file', 'pages_status'];
    static public function getSingle($id)
    {
        return PagesModel::find($id);
    }

    // static public function getRecord()
    // {
    //    $getPages = PagesModel::latest()->get();

    //    return $getPages;
    // }
 static public function getRecord()
    {
        return PagesModel::select('pages.*', 'parentpage.parent_page_name as parent_page_id')
                    ->join('parentpage', 'parentpage.id', '=', 'pages.parent_page_id')
                    ->orderBy('pages.id', 'desc')->get();
    }

    static public function getParentMenu(){
        return  PagesModel::select('pages.*', 'parentpage.parent_page_name as parent_page_id')
                    ->join('parentpage', 'parentpage.id', '=', 'pages.parent_page_id')
                    ->where('parent_page_name', '=','About')
                    ->where('pages_status', '=','Publish')
                    ->orderBy('pages.id', 'desc')->get();
    }

    // static public function getRecordFront()
    // {
    //     return PagesModel::select('pages.*', 'parentpage.parent_page_name as parent_page_id')
    //                 ->join('parentpage', 'parentpage.id', '=', 'pages.parent_page_id')
    //                 ->where('parent_page_name', '=','About')
    //                 ->where('pages_status', '=','Publish')
    //                 ->orderBy('pages.id', 'desc')->get();
    // }

    static public function getPage($id)
    {
        return PagesModel::find($id);
    }


   
}
