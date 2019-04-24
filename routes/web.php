<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route untuk index halaman di pindah kedalam membercontroller
Route::GET ('/', 'MemberController@index');

//ini adalah route untuk proses instalasi pertamakali
Route::GET ('/instalasi', 'MemberController@instalasi');
Route::GET ('/instalasiberhasil', 'MemberController@instalasiberhasil');

//ini adalah controller untuk member
Route::GET('/pemesanan', 'MemberController@pemesanan');
Route::POST('/prosespemesanan', 'MemberController@prosespemesanan');
Route::GET('/themesedit', 'MemberController@themesedit');
Route::POST('/lupapassword', 'MemberController@lupapassword');

//route yang biasa digunakan untuk edit themes

//themes edit
Route::GET('/themes_edit', 'ThemesController@themes');
Route::GET('/themes_panel', 'ThemesController@themes_panel'); 
Route::GET('/themes_sosialmedia', 'ThemesController@themes_sosialmedia'); 
Route::GET('/themes_postproduk', 'ThemesController@themes_postproduk'); 
Route::GET('/themes_posttestimoni', 'ThemesController@themes_posttestimoni'); 
Route::GET('/themes_layouts', 'ThemesController@themes_layouts'); 


//proses themes edit
Route::POST('/proses/themes_edit', 'ThemesController@themesproses'); 
Route::POST('/proses/themes_sosialmedia', 'ThemesController@prosesthemes_sosialmedia'); 
Route::POST('/proses/themes_postproduk', 'ThemesController@prosesthemes_postproduk'); 
Route::POST('/proses/prosesthemes_posttestimoni', 'ThemesController@prosesthemes_posttestimoni'); 
Route::POST('/proses/themes_panel', 'ThemesController@prosesthemes_panel'); 
Route::POST('/proses/themes_layouts', 'ThemesController@prosesthemes_layouts'); 

//proses crud  postproduk
Route::GET ('/editpost/{slug}', 'ThemesController@editpost'); 
Route::GET ('/hapuspost/{slug}', 'ThemesController@hapuspost'); 
Route::POST('/proses/proseseditpost', 'ThemesController@proseseditpost'); 

//proses crud untuk post fototestimoni
Route::GET('/hapusfototestimoni/{id}', 'ThemesController@hapusfototestimoni');

//proses hapus content
Route::GET('/hapuscontent/{id}', 'ThemesController@hapuscontent');

//proses edit content
Route::GET('/editcontent/{id}','ThemesController@editcontent');
Route::POST('/proseseditkontent','ThemesController@prosesedit');

//proses ganti warna
Route::GET ('/gantiwarna','ThemesController@editwarna');
Route::POST ('/proses/themes_color','ThemesController@proseseditwarna');




Auth::routes();

Route::GET ('/home', 'HomeController@index')->name('home');