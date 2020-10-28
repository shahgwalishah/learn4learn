<?php

namespace App\Http\Controllers;
use App\Models\levels;
use App\Models\Subject;
use Request;
use sum;
use DB;
class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth','verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */

    public function verifyEmailAddress(){
        if(!\Auth::user()) {
            return back();
        } else {
            $subjects = Subject::all();
            $no_of_chunk = $subjects->count() / 2;
            $subjects = $subjects->chunk($no_of_chunk);
            $level = levels::all();
            $user_id = \Auth::user()->id;
            if (\Auth::user()->type == 'teacher') {
                session()->flash('success-alert-message-teac', "Email Verification Send To Your Email Address.");
                return view('auth.teachers.teacher-subjects', compact('subjects', 'user_id'));
            } else {
                session()->flash('success-alert-message-teac', "Email Verification Send To Your Email Address");
                return view('auth.students.student-level', compact('level', 'user_id'));
            }
        }
    }

    public function redirectUserProfile(){
        $user_id     =  \Auth::user()->id;
        $allSubjects = Subject::all();
        return view('auth.students.student-profile', compact('user_id', 'allSubjects'));
    }

    public function getLessons(){
        $subjects = Subject::all();
        return collect([
            'status' => true,
            'data' => $subjects
        ]);
    }

    public function index()
    {
        // dd(123);
        $totalteacher=DB::table('users')->select('type')->where('type', 'teacher')->get();
        $teacher=count($totalteacher);

       $totalteacher=DB::table('users')->select('type')->where('type', 'student')->get();
        $student=count($totalteacher);


           $lessons=DB::table('lessons')->select('id')->get();
        $lessons=count($lessons);


        return view('dashboard')->with(['teacher'=>$teacher, 'student'=>$student, 'lessons'=>$lessons]);
    }


}
