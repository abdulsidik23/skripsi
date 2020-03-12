<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('coba');
// });

// // Route::get('coba2','HomeController@index');

// // Route::get('model','HomeController@model');

// // Route::get('coba2','HomeController@index');

Route::get('/','HomeController@index');

Route::get('profil', function () {
     return view('profil');
 });

Route::get('kontak', function () {
     return view('kontak');
 });

Route::get('post','PostController@index');

Route::get('post/cari/{nama}','PostController@cari');


Route::get('post/form','PostController@getForm')->middleware(['auth','admin']);
Route::post('post/form','PostController@postForm')->middleware(['auth','admin']);
Route::get('post/hapus','PostController@hapus')->middleware(['auth','admin']);



Route::get('post/detail/{id}','PostController@detail');
Route::get('post/berita','PostController@berita');
Route::get('post/event','PostController@event');
Route::get('post/pengumuman','PostController@pengumuman');
Route::get('login','Auth\LoginController@getLogin');
Route::post('login','Auth\LoginController@postLogin');
Route::get('logout','Auth\LoginController@getLogout');
Route::get('daftar','Auth\RegisterController@getDaftar');
Route::post('daftar','Auth\RegisterController@postDaftar');
Route::get('daftar/cekusername','Auth\RegisterController@cekusername');

Route::get('curhat','CurhatController@index')->middleware(['auth']);
Route::get('curhat/kirim','CurhatController@kirim')->middleware(['auth']);
Route::get('getnotif','HomeController@getnotif')->middleware(['auth']);
Route::get('chatbox/{user}','CurhatController@chatbox')->middleware(['auth']);
Route::get('ambilchat/{user}','CurhatController@ambilchat')->middleware(['auth']);

Route::get('biodata','BiodataController@index');
Route::get('biodata/formbiodata','BiodataController@getForm')->middleware(['auth','admin']);
Route::post('biodata/formbiodata','BiodataController@postForm')->middleware(['auth','admin']);
Route::get('biodata/hapus','BiodataController@hapus')->middleware(['auth','admin']);
