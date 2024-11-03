<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentPageModel extends Model
{
    use HasFactory;
    protected $table ='parentpage';
    //  public $fillable = ['branch_name', 'branch_district', 'shortdescription', 'longdescription', 'branch_status'];
    static public function getSingle($id)
    {
        return ParentPageModel::find($id);
    }

    static public function getRecord()
    {
       $getPages = ParentPageModel::latest()->get();

       return $getPages;
    }




   
}

