<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CourseModel extends Model
{
    use HasFactory;
    protected $table ='course';
    static public function getSingle($id)
    {
        return CourseModel::find($id);
    }

 
    static public function getRecord()
    {
        return CourseModel::get();
    }
    static public function getCourseMenu(){
        return  CourseModel::select('course.*')
                    ->where('course_status', '=','Publish')
                    ->orderBy('course.id', 'desc')->get();
    }
     static public function getCourse($id){
        return CourseModel::find($id);
    }
}
