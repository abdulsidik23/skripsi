<?php

namespace App\Http\Controllers;

use DB;
use App\Biodata;
use Illuminate\Http\Request;
class BiodataController extends Controller
{
   // public function index(){
   //    $kategoris=DB::table('kategori')->get();
   //    return view ('coba2',['kategoris'=>$kategoris]);
   // }
   //  public function model(){
   //    $kategoris=Kategori::all();
   //    return view ('coba2',['kategoris'=>$kategoris]); }

public function index(){
   $biodatas = Biodata::select()
   ->orderBy('created_at','desc')
->paginate(10);
   //return view('post.index',['posts'=>$posts]);
if (!array_key_exists('user', $_SESSION)||!$_SESSION['user']||$_SESSION['tipe_user']=='user') {
   return view('biodata.indexbiodata',['biodatas'=>$biodatas]);
}
return view('biodata.indexbiodata',['biodatas'=>$biodatas]);
}


public function getForm (Request $r)
{
   $id=$r->input('id');

   if($id)
   {
      $biodata=Biodata::where('id_biodata',$id)->first();

   }
   else
   {

      $biodata = new Biodata();
   }
   return view('biodata.formbiodata',['biodata'=>$biodata]);
}

public function postForm (Request $r)
{
   $nik = $r->input('nik');
   $nama = $r->input('nama');
   $ttl = $r->input('ttl');
   $jenis_kelamin = $r->input('jenis_kelamin');
   $tahun_masuk = $r->input('tahun_masuk');
   $alamat = $r->input('alamat');
   $hobi = $r->input('hobi');
   $jabatan = $r->input('jabatan');
   $prestasi_motor = $r->input('prestasi_motor');
   $motto = $r->input('motto');
   
   if($r->id)
   {
      $new_biodata = $r->all();
      $old_biodata = Biodata::find($r->id);
      $old_biodata->update($new_biodata);
   }else
   {
      $biodata = new Biodata();
      $biodata->nik = $nik;
      $biodata->nama = $nama;
      $biodata->ttl = $ttl;
      $biodata->jenis_kelamin = $jenis_kelamin;
      $biodata->tahun_masuk = $tahun_masuk;
      $biodata->alamat = $alamat;
      $biodata->hobi = $hobi;
      $biodata->jabatan = $jabatan;
      $biodata->prestasi_motor = $prestasi_motor;
      $biodata->motto = $motto;
      $biodata->save();
   }

   return redirect('biodata'); 
}

public function hapus (Request $r)
{
   $id = $r->input('id');
$biodata= Biodata::where('id_biodata',$id)->delete();
return redirect('biodata');
}
}