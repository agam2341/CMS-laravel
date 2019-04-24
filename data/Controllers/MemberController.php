<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
{
    
    public function pemesanan()
    {
        return view('/auth/pemesanan');
    }

    public function index()
    {
    	//mengambil data dalam tabel
    	$tampilkan  = DB::table('themes_edit')->first();
        $post       = DB::table('postproduk')->paginate(6);
        $content    = DB::table('content')->get();
    	//menampilan   
    	return view('index', ['tampilkan' => $tampilkan, 'post' => $post]);
    }

}
