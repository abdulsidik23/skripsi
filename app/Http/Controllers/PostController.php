<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\Kategori;
use Illuminate\Http\Request;
class PostController extends Controller
{
   // public function index(){
   // 	$kategoris=DB::table('kategori')->get();
   // 	return view ('coba2',['kategoris'=>$kategoris]);
   // }
   //  public function model(){
   // 	$kategoris=Kategori::all();
   // 	return view ('coba2',['kategoris'=>$kategoris]); }

public function index(){
	$posts = Post::select()
	->orderBy('created_at','desc')
->paginate(10);
	//return view('post.index',['posts'=>$posts]);
if (!array_key_exists('user', $_SESSION)||!$_SESSION['user']||$_SESSION['tipe_user']=='user') {
   return view('post.indexuser',['posts'=>$posts]);
}
return view('post.index',['posts'=>$posts]);
}

public function berita (){
   $posts=Post::join('kategori','kategori.id_kategori','=','post.id_kategori')
   ->select('post.*')
   ->where('kategori.nama','berita')
   ->orderBy('post.created_at','desc')
   ->paginate(10);
   return view('post.indexuser',['posts'=>$posts]);
}
public function pengumuman (){
   $posts=Post::join('kategori','kategori.id_kategori','=','post.id_kategori')
   ->select('post.*')
   ->where('kategori.nama','pengumuman')
   ->orderBy('post.created_at','desc')
   ->paginate(10);
   return view('post.indexuser',['posts'=>$posts]);
   }

   public function event (){
   $posts=Post::join('kategori','kategori.id_kategori','=','post.id_kategori')
   ->select('post.*')
   ->where('kategori.nama','event')
   ->orderBy('post.created_at','desc')
   ->paginate(10);
   return view('post.indexuser',['posts'=>$posts]);
   }
public function getForm (Request $r)
{
	$id=$r->input('id');
if($id)
{
	$post=Post::where('id_post',$id)->first();

}
else
{

	$post = new Post();
}

$kategoris=Kategori::select()->get();
return view('post.form',['post'=>$post,'kategoris'=>$kategoris]);

}
public function postForm (Request $r)
{
   $id = $r->input('id');
   $judul = $r->input('judul');
   $isi = $r->input('isi');
   $kategori = $r->input('kategori');
   $gambar = $r->file('gambar');
   $dokumen = $r->file('dokumen');
   if($id)
{
   $post = Post::where('id_post',$id)->First();

}
else
{
$post = new Post();

}
$post->judul = $judul;
$post->isi = $isi;
$post->id_kategori = $kategori;
$post->username = $_SESSION['user'];
$post->save();
if ($gambar) {
$gambar->move(public_path('gambarpost'),$post->id_post.'.'.$gambar->getClientOriginalExtension());
  $post->gambar=$post->id_post.'.'.$gambar->getClientOriginalExtension();
}

if ($dokumen) {
$dokumen->move(public_path('dokumen'),$post->id_post.'.'.$dokumen->getClientOriginalExtension());
 $post->dokumen=$post->id_post.'.'.$dokumen->getClientOriginalExtension();

}

$post->save();


return redirect('post'); 
}


public function hapus (Request $r)
{
   $id = $r->input('id');
$post= Post::where('id_post',$id)->delete();
return redirect('post');
}


public function cari ($nama)
{
   $posts=Post::where('judul','like','%'.$nama.'%')
   ->orderBy('created_at','asc')
->paginate(10);
//return view('post.index',['posts'=>$posts]);
return  view('post.indexuser',['posts'=>$posts]);
}

public function detail ($id)
{
$post= Post::where('id_post',$id)->first();
//return view('post.detail',['post'=>$post]); 
return view('post.detailuser',['post'=>$post]);
}
}

