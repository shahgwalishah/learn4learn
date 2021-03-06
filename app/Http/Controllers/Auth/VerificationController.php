<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // protected $redirectTo = '/';
    protected function redirectTo()
    {
        $user = Auth::user();
        if ($user->type == 'teacher') {
            session()->flash('alert-success', 'Email verified successfully!');
            return route('teacherHome');
        }
        if ($user->type == 'student') {
            session()->flash('alert-success', 'Email verified successfully!');
            return route('studentHome');
        }
        if ($user->type == 'admin') {
            session()->flash('alert-success', 'Email verified successfully!');
            return route('home');
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
