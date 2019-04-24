<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ThemesController extends Controller
{
   public function themes()
   {

   		//mengambil data dalam tabel
      $tampilkan = DB::table('themes_edit')->first();

    	//menampilan   
        return view('/member/themes_edit', ['tampilkan' => $tampilkan]);
   }

   public function themes_panel()
   {
    echo "string";
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
              //validasu file foto
              $this->validate($request, [

              'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

              ]);

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
              return redirect('themes_edit')->with('success', 'Data Berhasil Diperbarui');
      }else{

            $simpan = DB::table('themes_edit')->where('idmember',  Auth::user()->id)->update([
                 'title'         => $request->title,
                 'embedvideo'    => $request->embedvideo,
                 'desc_landing'  => $request->desc_landing,
                 'footer'        => $request->footer,
              ]);

            //meredirect kedalam halaman berikutnya
            return redirect('themes_edit')->with('success', 'Data Berhasil Diperbarui');

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
        return redirect('/themes_sosialmedia')->with('success','Data Berhasil Diperbarui');
      }else{
        return redirect('/themes_sosialmedia')->with('failed','Tidak Ada Data Yang Diperbarui');
      }
   }

   # kegiatan crud untuk post produk
   public function prosesthemes_postproduk(Request $request)
   {

      //memasukan foto kedalam folder uploadfoto didalam public\
      if($request->foto == true)
      {
              //validasu file foto
              $this->validate($request, [

              'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

              ]);

              //mendefinisikan foto kedalam sistem
              $destination = "image";
              $foto        = $request->file('foto');
              $foto->move($destination, $foto->getClientOriginalName());


              $simpan = DB::table('postproduk')->insert([
                 'id'            => NULL,
                 'title'         => $request->title,
                 'slug'          => $request->slug,
                 'foto'          => '/image/'.$foto->getClientOriginalName(),
                 'deskripsi'     => $request->deskripsi,
                 'oleh'          => Auth::user()->name,
              ]);
              
              //meredirect kedalam halaman berikutnya
              return redirect('themes_postproduk')->with('success', 'Data Berhasil Diperbarui');
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
            return redirect('themes_postproduk')->with('success', 'Data Berhasil Diperbarui');

      }

   }

   public function hapuspost($slug)
   {
      DB::table('postproduk')->where('slug', $slug)->delete();
      return redirect('themes_postproduk')->with('delete', 'Data Berhasil Dihapus');
   }

   public function editpost($slug)
   {

      //validasu file foto
      $this->validate($request, [

      'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);

      $tampilkan = DB::table('postproduk')->where('slug', $slug)->first();
      return view('member/proses/editpost', ['tampilkan' => $tampilkan]);

   }

   public function proseseditpost(Request $request)
   {

        //memasukan foto kedalam folder uploadfoto didalam public\
      if($request->foto == true)
      {
              //validasu file foto
              $this->validate($request, [

              'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

              ]);

              //mendefinisikan foto kedalam sistem
              $destination = "image";
              $foto        = $request->file('foto');
              $foto->move($destination, $foto->getClientOriginalName());


              $simpan = DB::table('postproduk')->update([
                 'title'         => $request->title,
                 'slug'          => $request->slug,
                 'foto'          => '/image/'.$foto->getClientOriginalName(),
                 'deskripsi'     => $request->deskripsi,
                 'oleh'          => Auth::user()->name,
              ]);
              
              //meredirect kedalam halaman berikutnya
              return redirect('themes_postproduk')->with('success', 'Data Berhasil Diperbarui');
      }else{

            $simpan = DB::table('postproduk')->update([
                 'title'         => $request->title,
                 'slug'          => $request->slug,
                 'deskripsi'     => $request->deskripsi,
                 'oleh'          => Auth::user()->name,
              ]);
            //meredirect kedalam halaman berikutnya
            return redirect('themes_postproduk')->with('success', 'Data Berhasil Diperbarui');

      }

   }

   public function oke()
   {
      return 'okejoen';
   }
}