<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use Mail;


class MemberController extends Controller
{
    
    public function instalasi(Request $request)
    {
        //membuat kondisi untuk hanya satu user
        $kondisi    = DB::table('users')->count();

        if($kondisi == 0) 
        {

            //membuat kondisi untuk tidak menambah user 
            if($kondisi == 0)
            {
                //membuat data pengguna landing page
                $simpan =  User::create([
                    'name'      => $request->nama,
                    'email'     => $request->email,
                    'pw'        => $request->password,
                    'password'  => Hash::make($request->password),
                ]);


                if($simpan == true)
                {
                    //mengambil data iduser
                    $user         = DB::table('users')->first();

                    //mengubah data id member untuk menyesuaikannya dengan data iduser
                    $ubahidmember = DB::table('themes_edit')->update([
                        'idmember'        => $user->id
                    ]);

                    //mengubah status user di tabel instalasi menjadi aktif
                    $statusinstalasi = DB::table('instalasi')->update([
                        'status'  => 'Aktif',
                    ]);

                    return view('instalasi/instalasiberhasil', ['nama' => $request->nama]);
                }

            }else{
                    return view('instalasi/instalasiberhasil', ['nama' => $request->nama]);
            }

        }else{
            echo 'data kosong';
        }
                 

    }

    public function instalasiberhasil()
    {
        return view('instalasi/instalasiberhasil');
    }


    public function pemesanan()
    {
        return view('/auth/pemesanan');
    }

    public function prosespemesanan(Request $request)
    {
        $nama           = $request->nama;
        $nomerhp        = $request->nomerhp;
        $pesanan        = $request->barangpesanan;
        $alamat         = $request->alamat;
        $kodepos        = $request->kodepos;
        $datapengguna   = DB::table('themes_edit')->first();      
        $wapengguna     = $datapengguna->wa;

        echo "<meta http-equiv='REFRESH' content='0;url=https://api.whatsapp.com/send?phone=".$wapengguna."&text=*Order%20Produk%20*%0A%0Ato:". $nama."%20%20%0Ahp: ". $nomerhp."%20%20%0Aalamat:". $alamat."%20%20%0Akdpos%3A". $kodepos."%20%0Aorder%3A". $pesanan."'>";
    }



    public function index()
    {
    	//mengambil data dalam tabel
        $user       = DB::table('users')->first();
    	$tampilkan  = DB::table('themes_edit')->first();
        $post       = DB::table('postproduk')->paginate(6);
        $content    = DB::table('content')->get();
        $warna      = DB::table('themes_color')->first();

    
        if($user == false)
        {
            //mengecek status pengguna landing page
            $pengguna = DB::table('instalasi')->count();

            //membuat  kondisi untuk mengecek pengguna ada atau tidak
            if($pengguna == 0)
            {
                //membuat status untuk pengguna untuk tahap proses instalasi
                $status = DB::table('instalasi')->insert(['id'=>NULL,'status'=>'Tidak Aktif',]);

                //menampilkan halaman instalasi
                return view('instalasi/instalasi');
            }else{
                return view('instalasi/instalasi');
            }

        }else{
            //menampilkan fototestimoni
            $fototestimoni = DB::table('fototestimoni')->get();
            $sectionstatus = DB::table('statussection')->get();
            //menampilan kedalam halaman jika telah menginstal landing page terlebih dahulu
            return view('index', ['tampilkan' => $tampilkan, 'post' => $post, 'fototestimoni' => $fototestimoni, 'sectionstatus' => $sectionstatus, 'content' => $content, 'warna' => $warna]);

        }
    	
    }

    public function lupapassword(Request $request)
    {
        //menyamakan data email yang diinput dengan data yang ada dalam tabel
        $email  = DB::table('users')->where('email', $request->email)->count();

        if($email == 0)
        {
            return redirect('/password/reset')->with('emailsalah', 'Maaf ! Email yang anda masukan bukan email yang terdaftar sebelumnya');
        }else{

            $email          = DB::table('users')->where('email', $request->email)->first();
            $emailpengguna  = $request->email;
            $password       = $email->pw;
            $name           = $email->name;
            // mengirimkan pemberitahuan pembelian aplikasi
            $data = array('name'=>$emailpengguna, "body" => $password);
   
            Mail::send('assets.kirimpassword', $data, function($message) use ($emailpengguna,$name) {
                $message->to($emailpengguna, $name)
                        ->subject('Username Dan Password Anda');
                $message->from('kokitindonesia@gmail.com','Berl landing Page');
            });

            return redirect('/password/reset')->with('emailsukses', 'Pemberitahuan password telah kami kirim ke email, Silahkan Cek Email Anda, jika tidak ada pemberitahuan pada inbox, silahkan periksa Spam.');
        }
    }



}
