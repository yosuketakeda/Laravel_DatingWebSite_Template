<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/****** lili code  ******/
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
/***********************/


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
    protected $redirectTo = '/edit_profile/settings';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function authenticated(Request $request, $user)
    {
        $login_time = date('Y-m-d H:i:s');
        DB::table('usermeta')
            ->where('id',Auth::user()->id)
            ->update([
                'login_time'=>$login_time,
        ]);
    }

    public function logout(Request $request) {
        $logout_time = date('Y-m-d H:i:s');

        DB::table('usermeta')
            ->where('id',Auth::user()->id)
            ->update([
                'logout_time'=>$logout_time,
        ]);
        //$request->session()->forget('home_vals');
        $request->session()->flush();
        
        Auth::logout();
        return redirect('/');
    }
}
