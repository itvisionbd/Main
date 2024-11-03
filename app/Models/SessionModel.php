<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SessionModel extends Model
{
    use HasFactory;
    protected $table ='session';
    static public function getSingle($id)
    {
        return SessionModel::find($id);
    }

 
    static public function getRecord()
    {
        return SessionModel::get();
    }
}
