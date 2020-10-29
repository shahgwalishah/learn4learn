<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Homework;
use App\Models\Lesson;
use App\Models\StudentLesson;

class Subject extends Model
{
    protected $guarded = ['_token'];


    public function getTitle($id){
        $lesson = Lesson::where('subject_id','=',$id)->first();
        return isset($lesson) ? $lesson->title : '';
    }

    public function getDate($id){
        $lesson = Lesson::where('subject_id','=',$id)->first();
        return isset($lesson) ? $lesson->date : '';
    }

    public static function getSubjectData()
    {
    	return self::all();
    }

    public function homework(){
        return $this->hasMany(Homework::class , 'Sub_id','id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class , 'subject_id','id');
    }

    public function student_lessons(){
        return $this->hasMany(StudentLesson::class , 'subjects_id','id');
    }

    public static function getDataSearchStudent()
    {
    	return self::all();
    }
}
