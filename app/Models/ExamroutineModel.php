<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamroutineModel extends Model
{
    use HasFactory;
    protected $table ='examroutine';
    static public function getSingle($id)
    {
        return ExamroutineModel::find($id);
    }

    static public function getRecord()
    {
        return ExamroutineModel::select('examroutine.*', 'course.course_title as course_id', 'branches.branch_name as branch_id', 'session.session_title as session_id')
                    ->join('course', 'course.id', '=', 'examroutine.course_id')
                    ->join('branches', 'branches.id', '=', 'examroutine.branch_id')
                    ->join('session', 'session.id', '=', 'examroutine.session_id')
                    ->orderBy('examroutine.id', 'desc')->get();
    }
    
}
