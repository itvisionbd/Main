<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class HeaderModel extends Model
{
    use HasFactory;
    protected $table ='header';

   static public function getSingle()
    {
        return  HeaderModel::find(1);
    }

}
