<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Crypt;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getLogin(Request $r) {
        $error=$r->input('error');
        return view('auth.login',['error'=>$error]);
    }
   public function postLogin(Request $r) {
    $un=$r->input('username');
    $pass=$r->input('password');
    $user=User::where('username',$un)->first();
    if ($user) {
        try{
            $d=Crypt::decrypt($user->password);
        }
catch (DecryptException $e){}
if ($d==$pass) {
    $_SESSION['user']=$un;
    $_SESSION['tipe_user']=$user->tipe_user;
return redirect(url($this->redirectTo));
}
else  {
    return redirect(url('login?error=password'));
}
            }
           return redirect(url('login?error=username')); 

   }
   public function getLogout(Request $r){
   session_unset();
    return redirect($this->redirectTo);

   }
}
