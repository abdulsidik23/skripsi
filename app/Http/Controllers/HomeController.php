<?php

namespace App\Http\Controllers;

use DB;
use App\Kategori;
use App\Post;
use App\Curhat;
use App\Biodata;

class HomeController extends Controller
{
   // public function index(){
   // 	$kategoris=DB::table('kategori')->get();
   // 	return view ('coba2',['kategoris'=>$kategoris]);
   // }
   //  public function model(){
   // 	$kategoris=Kategori::all();
   // 	return view ('coba2',['kategoris'=>$kategoris]); }

public function index(){

$posts= Post::orderBy('created_at','desc')
->take(3)
->get();

	return view('beranda',['posts'=>$posts]);
}
 public function getnotif(){
 	$notif=Curhat::where('user_terima',$_SESSION['user'])
 	->where('status','belum')
 	->get();
 	return count($notif);
 }
}
