<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ThemesController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth');
   }

   public function themes()
   {

   		//mengambil data dalam tabel
      $tampilkan = DB::table('themes_edit')->first();

    	//menampilan   
        return view('/member/themes_edit', ['tampilkan' => $tampilkan]);
   }

   public function themes_panel()
   {

      $sectionstatus = DB::table('statussection');

      return view('member/themes_panel', ['sectionstatus' => $sectionstatus]);
   }

   public function themes_sosialmedia()
   {
      //mengambil data dalam tabel
      $tampilkan = DB::table('themes_edit')->first();

      //menampilan   
      return view('/member/themes_sosialmedia', ['tampilkan' => $tampilkan]);
   }

   public function themes_postproduk()
   {

      //mengambil data dalam tabel
      $tampilkan = DB::table('postproduk')->paginate(6);
      return view('/member/themes_postproduk', ['tampilkan' => $tampilkan]);

   }

    public function themesproses(Request $request)
   {
      //memasukan foto kedalam folder uploadfoto didalam public\
      if($request->foto == true)
      {
              //mendefinisikan foto kedalam sistem
              $destination = "image";
              $foto        = $request->file('foto');
              $foto->move($destination, $foto->getClientOriginalName());


              $simpan = DB::table('themes_edit')->where('idmember',  Auth::user()->id)->update([
                 'title'         => $request->title,
                 'embedvideo'    => $request->embedvideo,
                 'desc_landing'  => $request->desc_landing,
                 'footer'        => $request->footer,
                 'fotolanding' => '/image/'.$foto->getClientOriginalName(),
              ]);

              //meredirect kedalam halaman berikutnya
              return redirect('home')->with('success', 'Data Berhasil Diperbarui');
      }else{

            $simpan = DB::table('themes_edit')->where('idmember',  Auth::user()->id)->update([
                 'title'         => $request->title,
                 'embedvideo'    => $request->embedvideo,
                 'desc_landing'  => $request->desc_landing,
                 'footer'        => $request->footer,
              ]);

            //meredirect kedalam halaman berikutnya
            return redirect('home')->with('success', 'Data Berhasil Diperbarui');

      }

   }

   public function prosesthemes_sosialmedia(Request $request)
   {
      $simpan = DB::table('themes_edit')->where('idmember', Auth::user()->id)->update([

        'phone'       => $request->phone,
        'email'       => $request->email,
        'fb'          => $request->fb,
        'tw'          => $request->tw,
        'yt'          => $request->yt,
        'wa'          => $request->wa,
        'ig'          => $request->ig,

      ]);

      if($simpan == true)
      {
        return redirect('/home')->with('success','Data Berhasil Diperbarui');
      }else{
        return redirect('/home')->with('failed','Tidak Ada Data Yang Diperbarui');
      }
   }

   # kegiatan crud untuk post produk
   public function prosesthemes_postproduk(Request $request)
   {

      //memasukan foto kedalam folder uploadfoto didalam public\
      if($request->foto == true)
      {

              //mendefinisikan foto kedalam sistem
              $destination = "fotoproduk";
              $foto        = $request->file('foto');
              $foto->move($destination, $foto->getClientOriginalName());


              $simpan = DB::table('postproduk')->insert([
                 'id'            => NULL,
                 'title'         => $request->title,
                 'slug'          => $request->slug,
                 'foto'          => '/fotoproduk/'.$foto->getClientOriginalName(),
                 'deskripsi'     => $request->deskripsi,
                 'oleh'          => Auth::user()->name,
              ]);
              
              //meredirect kedalam halaman berikutnya
              return redirect('home')->with('success', 'Data Berhasil Diperbarui');
      }else{

            $simpan = DB::table('postproduk')->insert([
                 'id'            => NULL,
                 'title'         => $request->title,
                 'slug'          => $request->slug,
                 'foto'          => '/image/noutfound.jpg',
                 'deskripsi'     => $request->deskripsi,
                 'oleh'          => Auth::user()->name,
              ]);
            //meredirect kedalam halaman berikutnya
            return redirect('home')->with('success', 'Data Berhasil Diperbarui');

      }

   }

   public function hapuspost($slug)
   {
      DB::table('postproduk')->where('slug', $slug)->delete();
      return redirect('home')->with('delete', 'Data Berhasil Dihapus');
   }

   public function editpost($slug)
   {

      $tampilkan = DB::table('postproduk')->where('slug', $slug)->first();
      return view('member/proses/editpost', ['tampilkan' => $tampilkan]);

   }

   public function proseseditpost(Request $request)
   {

        //memasukan foto kedalam folder uploadfoto didalam public\
      if($request->foto == true)
      {

              //mendefinisikan foto kedalam sistem
              $destination = "fotopproduk";
              $foto        = $request->file('foto');
              $foto->move($destination, $foto->getClientOriginalName());


              $simpan = DB::table('postproduk')->update([
                 'title'         => $request->title,
                 'slug'          => $request->slug,
                 'foto'          => '/fotoproduk/'.$foto->getClientOriginalName(),
                 'deskripsi'     => $request->deskripsi,
                 'oleh'          => Auth::user()->name,
              ]);
              
              //meredirect kedalam halaman berikutnya
              return redirect('home')->with('success', 'Data Berhasil Diperbarui');
      }else{

            $simpan = DB::table('postproduk')->update([
                 'title'         => $request->title,
                 'slug'          => $request->slug,
                 'deskripsi'     => $request->deskripsi,
                 'oleh'          => Auth::user()->name,
              ]);
            //meredirect kedalam halaman berikutnya
            return redirect('home')->with('success', 'Data Berhasil Diperbarui');

      }

   }

   public function themes_posttestimoni()
   {
      //menampilkan tabel pada halaman post testimoni
      $fototestimoni  = DB::table('fototestimoni')->get();

      return view('/member/themes_posttestimoni', ['fototestimoni' => $fototestimoni]); 
   }

   public function prosesthemes_posttestimoni(Request $request)
   {
        if($request->foto == true)
        {
             //mendefinisikan foto kedalam sistem
              $destination = "fototestimoni";
              $foto        = $request->file('foto');
              $foto->move($destination, $foto->getClientOriginalName());


              $simpan = DB::table('fototestimoni')->insert([
                 'id'             => NULL,
                 'fototestimoni'  => '/fototestimoni/'.$foto->getClientOriginalName(),
              ]);

              return redirect('/home')->with('fotosukses','Foto testimoni berhasil ditambahkan');
        }else{
              return redirect('/home')->with('fotokosong','Maaf! Tidak ada foto yang dimasukan');
        }
   }

   public function hapusfototestimoni($id)
   {
      //menghapus data fototestimoni
      DB::table('fototestimoni')->where('id', $id)->delete();

      //meredirect kedalam halaman pertama
      return redirect('home')->with('delete', 'Foto berhasil terhapus');
   }

   public function prosesthemes_panel(Request $request)
   {

    if($request->section5 == NULL)
    {
      return redirect('/home')->with('success', 'Pengaturan Berhasil Disimpan');
    }else{

      DB::table('statussection')->where('nama_section', 'section5')->update([

        'status'    => $request->section5,

      ]);

      return redirect('/home')->with('success', 'Pengaturan Berhasil Disimpan');
    }

   }

   public function themes_layouts()
   {
      $data = DB::table('content')->get();

      return view('/member/themes_layout', ['data' => $data]);
   }

   public function prosesthemes_layouts(Request $request)
   {
      if($request->foto == true)
        {
             //mendefinisikan foto kedalam sistem
              $destination = "imagelayouts";
              $foto        = $request->file('foto');
              $foto->move($destination, $foto->getClientOriginalName());


              $simpan = DB::table('content')->insert([
                 'id'             => NULL,
                 'gambar'         => '/imagelayouts/'.$foto->getClientOriginalName(),
                 'deskripsi'      => $request->deskripsi,
              ]);

              return redirect('/home')->with('fotosukses','Data berhasil ditambahkan');
        }else{
              return redirect('/home')->with('fotokosong','Maaf! Foto Tidak Boleh Kosong');
        }
   }

   //FUNGSI UNTUK MENGHAPUS DATA CONTENT
   public function hapuscontent($id)
   {
      $hapus = DB::table('content')->where('id', $id)->delete();

      return redirect('/home')->with('success', 'Data Berhasil Dihapus');
   }

   public function editcontent($id)
   {
      $tampilkan= DB::table ('content')->where ('id',$id)->first();


      return view('member/proses/editkontent',['tampilkan' => $tampilkan]); 
   }

   public function prosesedit(Request $request)
   {
      if($request->foto == true)
      {
           //mendefinisikan foto kedalam sistem
            $destination = "imagelayouts";
            $foto        = $request->file('foto');
            $foto->move($destination, $foto->getClientOriginalName());


            $simpan = DB::table('content')->where ('id',$request->id)->update([
               'gambar'         => '/imagelayouts/'.$foto->getClientOriginalName(),
               'deskripsi'      => $request->deskripsi,
            ]);

            return redirect('/home')->with('fotosukses','Data berhasil diupdate');
      }else{
            $simpan = DB::table('content')->where ('id',$request->id)->update([
               'deskripsi'      => $request->deskripsi,
            ]);
            return redirect('/home')->with('success','Data berhasil diupdate');
      }
   }

   public function editwarna(Request $request)
   {
      return view ('/member/themes_color');
   }

   public function proseseditwarna(Request $request)
   {
      $warna = $request -> warna ;

      //proseseditwarna
      
      $update = DB::table ('themes_color')-> where ('id',1)->update([

         'warna' => $warna, 


      ]);

      return redirect ('/home')->with ('success','Warna Background Berhasil Diubah');
   }

   
}