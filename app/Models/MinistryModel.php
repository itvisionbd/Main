<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MinistryModel extends Model
{
    use HasFactory;
    protected $table ='ministry';

   static public function getSingle()
    {
        return  MinistryModel::find(1);
    }

}
