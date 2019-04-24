@extends ('layouts.app')

@section ('title','Dashboard Social Media')

@section ('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a class="btn btn-primary" href="{{ url('/home') }}" style="margin-bottom:10px;">Kembali ke Menu</a>
            <div class="card">
                <div class="card-body">
                    <h5>Silahkan Isi Data Dibawah Ini :</h5>
                    
                    <!-- message pemberitahuan -->
                    @include('/assets/message')
                    
                    <hr/>
                    <br/>
                    <form action="{{ url('/proses/themes_sosialmedia') }}" method="POST">
                    {{ csrf_field() }}
                    
                        <b>Facebook :</b><br/>
                        <input type="text" autofocus="" name="fb" autocomplete="off" placeholder="Contoh {{ $tampilkan->fb }}" class="form-control"><br/>

                        <b>Youtube :</b>
                        <input type="text" autofocus="" name="yt" autocomplete="off" value="{{ $tampilkan->yt }}" class="form-control"><br/>

                        <b>Whatsapp :</b>
                        <input type="text" autofocus="" name="wa" autocomplete="off"  placeholder="Contoh: +{{ $tampilkan->wa }}" class="form-control"><br/>

                        <b>Instagram :</b>
                        <input type="text" autofocus="" name="ig" autocomplete="off" value="{{ $tampilkan->ig }}" class="form-control"><br/>

                        <b>No Tlp :</b>
                        <input type="text" autofocus="" name="phone" autocomplete="off" value="{{ $tampilkan->phone }}" class="form-control" placeholder="Example : 08920152491"><br/>

                        <b>Email :</b>
                        <input type="text" autofocus="" name="email" autocomplete="off" placeholder="Contoh: {{ $tampilkan->email }}" class="form-control"><br/>

                        <br/><br/>
                        <input type="submit" value="Update" name="simpan" class="btn btn-success">
                        <input type="reset" value="Cancel" name="cancel"class ="btn btn-danger">

                    </form>

                </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
