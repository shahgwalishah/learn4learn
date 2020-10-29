<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    const TEACHER_TYPE = 0;
    const STUDENT_TYPE = 1;
    protected $table   = 'homework';
    public $timestamps = false;

    protected $guarded = [];

    public static function getSearchHomeWork($id,$request)
    {
        $date_id = $request->date_id;
        $title_id = $request->title_id;
        if($request->date_id) {
            $result =  self::with(['lesson' => function($q) use ($date_id) {
                $q->where('id',$date_id);
            },
                'student_lessons' => function($q) use ($id) {
                    $q->where('user_id','=',$id);
                }])->get();
        } else if($request->subject_id) {
            $result =  self::where('Sub_id',$request->subject_id)->where('upload_type',self::TEACHER_TYPE)->with(['lesson','student_lessons' => function($q) use ($id) {
                    $q->where('user_id','=',$id);
                }])->get();
        } else if($request->title_id) {
            $result =  self::where('upload_type',self::TEACHER_TYPE)->with(['lesson' => function($q) use ($title_id) {
                $q->where('id',$title_id);
            },
                'student_lessons' => function($q) use ($id) {
                    $q->where('user_id','=',$id);
                }])->get();
        } else if($request->title_id && $request->subject_id && $request->date_id) {
            $result =  self::where('Sub_id',$request->subject_id)->where('upload_type',self::TEACHER_TYPE)->with(['lesson' => function($q) use ($date_id) {
                $q->where('id',$date_id);
            },
                'student_lessons' => function($q) use ($id) {
                    $q->where('user_id','=',$id);
                }])->get();
        } else {
            $result =  self::where('Sub_id',$request->subject_id)->where('upload_type',self::TEACHER_TYPE)->with(['lesson' => function($q) use ($date_id) {
                $q->where('id',$date_id);
            },
                'student_lessons' => function($q) use ($id) {
                    $q->where('user_id','=',$id);
                }])->get();
        }
        return $result;
//                               \DB::table('subjects')
//                                   ->join('homework', 'subjects.id', '=', 'homework.Sub_id')
//
//                                    ->join('lessons', 'subjects.id', '=', 'lessons.subject_id')
//
//                                    ->join('student_lessons', function ($join) {
//                                        $join->on('lessons.id', '=', 'student_lessons.lesson_id');
//                                    })
//
//                                    ->where('student_lessons.user_id', $student_iid)
//
//                                   ->join('users', 'users.id', '=', 'homework.teacher_id')
//
//                                    ->orderBy('homework.id', 'DESC')
//                                    ->select(
//                                        'subjects.name as subname',
//                                        'subjects.id as subject_iid',
//                                        'homework.id as homeWorkId',
//                                        'homework.title as homeworkTitle',
//                                        'homework.discription as homeworkdes',
//                                        'homework.date as homeDate',
//                                        'homework.document as homeworkDocument',
//                                        'lessons.id as lesson_id',
//                                        'lessons.title as Tilte_Lessons',
//                                        'lessons.Description as Lesson_des',
//                                        'lessons.date as LesonDate',
//                                        'users.fname'
//                                    )
//                                     ->where('subjects.id', $request->subject_id)
//                                     ->where('lessons.id', $request->date_id)
//                                    ->get();
    }

    public function subject()
    {
        return $this->hasOne(Subject::class, 'id', 'Sub_id');
    }

    public function lesson()
    {
        return $this->hasOne(Lesson::class, 'id', 'lesson_id');
    }

    public function teacher()
    {
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }

    public function student()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function student_lessons(){
        return $this->hasOne(StudentLesson::class,'subjects_id','Sub_id');
    }

    public static function getHomeWork($id)
    {
        return self::where('upload_type','=',self::TEACHER_TYPE)->with(['subject','lesson','student_lessons' => function($q) use ($id) {
            $q->where('user_id','=',$id);
        }])
        ->get();
//    	return \DB::table('subjects')
//                               ->join('homework', 'subjects.id', '=', 'homework.Sub_id')
//
//                               ->join('lessons', 'subjects.id', '=', 'lessons.subject_id')
//
//                                ->join('student_lessons', function ($join) {
//                                    $join->on('lessons.id', '=', 'student_lessons.lesson_id');
//                                })
//
//                                ->where('student_lessons.user_id', $id)
//
//                               ->join('users', 'users.id', '=', 'homework.teacher_id')
//
//                                ->orderBy('homework.id', 'DESC')
//                                ->select(
//                                    'subjects.name as subname',
//                                    'subjects.id as subject_iid',
//                                    'homework.id as homeWorkId',
//                                    'homework.title as homeworkTitle',
//                                    'homework.discription as homeworkdes',
//                                    'homework.date as homeDate',
//                                    'homework.document as homeworkDocument',
//                                    'lessons.id as lesson_id',
//                                    'lessons.title as Tilte_Lessons',
//                                    'lessons.Description as Lesson_des',
//                                    'lessons.date as LesonDate',
//                                    'users.fname'
//                                )
//                                ->limit(10)
//                                ->get();
    }

    public static function getHomeWorkDetail($id)
    {
        return self::where('id','=',$id)->with('subject','lesson','student_lessons')->first();
//        return \DB::table('subjects')
//            ->join('homework', 'subjects.id', '=', 'homework.Sub_id')
//            ->join('lessons', 'subjects.id', '=', 'lessons.subject_id')
//            ->join('student_lessons', function ($join) {
//                $join->on('lessons.id', '=', 'student_lessons.lesson_id');
//            })
//            ->join('users', 'users.id', '=', 'homework.teacher_id')
//            ->orderBy('homework.id', 'DESC')
//            ->where('subjects.id', $id)
//            ->select(
//                'subjects.name as subname',
//                'subjects.id as subject_iid',
//                'student_lessons.techer_id as student_lessonsTeacherId',
//                'homework.id as homeWorkId',
//                'homework.title as homeworkTitle',
//                'homework.document as h_docuent',
//                'homework.discription as homeworkdes',
//                'homework.date as homeDate',
//                'homework.document as homeworkDocument',
//                'lessons.id as lesson_id',
//                'lessons.title as Tilte_Lessons',
//                'lessons.Description as Lesson_des',
//                'lessons.*',
//                'lessons.thumbnail',
//                'lessons.date as LesonDate',
//                'users.fname',
//                'users.id as UserId',
//                'homework.teacher_id as teacher_ids'
//            )
//            ->limit(10)
//            ->first();
    }
}
