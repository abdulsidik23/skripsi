<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Crypt;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getDaftar(Request $r){
return view ('auth.daftar');
    } 

public function cekusername(Request $r) {
    $username=$r->input('username');
    $user=User::where('username',$username)->first();
    if($user) {
        return 'error';

    } else {
        return 'ok';
    }
}
public function postDaftar(Request $r) {
    $un=$r->input('username');
    $password=$r->input('password');
    $user=new User;
    $user->username=$un;
    $user->password=Crypt::encrypt($password);
    $user->status='aktif';
    $user->tipe_user='user';
    $user->save();
       return redirect ('login');
}
}
