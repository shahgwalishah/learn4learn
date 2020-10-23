<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages';
    public $timestamps=false;

    public function from_user(){
        return $this->hasOne(User::class,'id','from_user_id');
    }

    public static function getMessages($student_id)
    {
    	return \DB::table('messages')->select('role')->where('messages.student_id', $student_id)->get();
    }

    public static function getMessagesData($student_id)
    {
    	return \DB::table('messages')->select('messages.*')
                        ->where('messages.student_id', $student_id)
                        ->where('messages.teacherId', $student_id)
                        ->where('messages.role', 1)
                        ->get();
    }

    public static function getMessagesTeacher($student_id)
    {
    	return \DB::table('messages')->select('messages.*')
                    ->where('messages.student_id', $student_id)
                    ->where('messages.teacherId', $student_id)
                    ->where('messages.role', 0)
                    ->get();
    }

}
