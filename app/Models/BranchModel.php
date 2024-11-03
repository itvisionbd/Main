<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class BranchModel extends Model
{
    use HasFactory;
    protected $table ='branches';
     public $fillable = ['branch_name', 'branch_district', 'shortdescription', 'longdescription', 'branch_status'];
    static public function getSingle($id)
    {
        return BranchModel::find($id);
    }

    static public function getRecord()
    {
       $getBranches = BranchModel::latest()->get();

       return $getBranches;
    }

    static public function getRecordUser()
    {   
        $user_id  = Auth::user()->id;
       $getBranchesforUser = BranchModel::find($id)
       ->where('user_id', '=','id')->get();

       return $getBranchesforUser;
    }


static public function getRecordforUser()
{
    $userId = Auth::user()->id;
    $getBranches = BranchModel::where('user_id', $userId)->get();

    return $getBranches;
}




    static public function getBranchforManager($id)
    {
       $getBranches = BranchModel::find($id)
       ->where('branch_status', '=','Publish')
       ->orderBy('branches.id', 'desc')->get();

       return $getBranches;
    }

    static public function getBranchMenu(){
        return  BranchModel::select('branches.*')
                    ->where('branch_status', '=','Publish')
                    ->orderBy('branches.id', 'desc')->get();
    }
      static public function getBranch($id){
        return BranchModel::find($id);
    }

   
}

