<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function lessonDetails($lesson_id,$teacher_id){
        $data = User::where('id','=',$teacher_id)->with(['lessons' => function($q) use ($lesson_id,$teacher_id){
            $q->where('id','=',$lesson_id);
        }])->first();
        $similarLessons = Lesson::with('teacher','subject')->get();
        return view('frontend.pages.lesson-detail',[
            'lesssonDetail' => $data,
            'similarLessons' => $similarLessons
        ]);
    }
}
