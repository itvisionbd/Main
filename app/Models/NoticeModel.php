<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class NoticeModel extends Model
{
    use HasFactory;
    protected $table ='notice';
    static public function getSingle($id)
    {
        return NoticeModel::find($id);
    }
static public function getRecordFront()
    {
      return NoticeModel::offset(0)->limit(10)->get();
      }static public function getNewsMenu()
    {
      return NoticeModel::offset(0)->limit(10)->get();
      }
    

    static public function getRecord()
    {
        return NoticeModel::select('notice.*', 'users.name as user_id', 'branches.branch_name as branch_id')
                    ->join('users', 'users.id', '=', 'notice.user_id')
                    ->join('branches', 'branches.id', '=', 'notice.branch_id')
                    ->where('user_id',Auth::user()->id)->orderBy('notice.id', 'desc')->get();
    }

    
    static public function getNotice($id){
        return NoticeModel::find($id);
    }
    // return MyPackageModel::select('mypackage.*', 'users.name as uid')
    //                 ->join('users', 'users.id', '=', 'mypackage.uid')
    //                 // ->join('uid', 'users.id', '=', 'mypackage.uid')
    //                 ->where('uid',Auth::user()->id)->orderBy('mypackage.id','desc')->get();
}
