<?php

namespace App\Http\Controllers;

use DB;
use App\Curhat;
use Illuminate\Http\Request;
class CurhatController extends Controller
{
public function index(){

if (array_key_exists('user', $_SESSION)&&(!$_SESSION['user']||$_SESSION['tipe_user']=='user')) {

   return view('curhat.chatbox');
}
$users=DB::table('curhat')->select('user_kirim')
->where('user_kirim','<>','admin')
->where('user_kirim','<>','admin2')
->distinct()->get();
$jum=array();
foreach ($users as $u) {
	$curhats=DB::table('curhat')->where('user_kirim',$u->user_kirim)
	->where('status','belum')->get();
	$jum[]=count($curhats);
}
	return view('curhat.listuser',['users'=>$users,'jum'=>$jum]);

}

public function chatbox($user){
	 return view('curhat.chatbox',['user_terima'=>$user]);
}

public function kirim(Request $r){
$pesan=$r->input('pesan');
$user_terima=$r->input('user_terima');
$curhat=new Curhat();
$curhat->user_kirim=$_SESSION['user'];
$curhat->user_terima=$user_terima;
$curhat->isi=$pesan;
$curhat->status='belum';
$curhat->save();
}

public function ambilchat($user_kirim,Request $r){
	DB::table('curhat')
	->where('user_terima',$_SESSION['user'])
	->where('user_kirim',$user_kirim)
	->update(['status'=>'sudah']);

if($_SESSION['user'] == 'admin2'||$_SESSION['user'] == 'admin')
{
$chats=DB::table('curhat')
->where (function($query)use($user_kirim){
	$query->where('user_terima','admin')
	->orWhere('user_terima','admin2')
	->where('user_kirim',$_SESSION['user']);
})
->orWhere(function($query)use($user_kirim){
	$query->where('user_terima',$_SESSION['user'])
	->orWhere('user_kirim','admin')
	->orWhere('user_kirim','admin2');
})
->orderBy('created_at','asc')
->get();

}
else{
	$chats=DB::table('curhat')
->where (function($query)use($user_kirim){
	$query->where('user_terima','admin')
	->orWhere('user_terima','admin2')
	->orWhere('user_kirim',$_SESSION['user']);

})
->orWhere(function($query)use($user_kirim){
	$query->where('user_terima',$_SESSION['user'])
	->orWhere('user_kirim','admin')
	->orWhere('user_kirim','admin2');

})
->orderBy('created_at','asc')
->get();
}
	return view('curhat._tampilcurhat',['chats'=>$chats]);
}
}

