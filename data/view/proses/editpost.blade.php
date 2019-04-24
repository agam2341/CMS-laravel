@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/themes_edit') }}">Edit Themes</a><br/>
                    <a href="{{ url('/themes_sosialmedia') }}">Edit Sosial Media</a><br/>
                    <a href="{{ url('/themes_postproduk') }}">Post Produk</a>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Hallo Selamat Datang : {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @include('assets/message')
                    <form action="{{ url('/proses/proseseditpost') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                        Judul Produk :
                        <div class="field">
		               		<input type="text" required name="title" class="form-control" id="judul" placeholder="Masukan Judul Postingan" onkeyup="createslug()" value="{{ $tampilkan->title }}">
			            </div>
			            <div class="field">
			               <input type="hidden" class="form-control" value="{{ $tampilkan->title }}" name="slug" id="slug1" placeholder="Slug">
			            </div>

                        <br/>
                        Foto :
                        <input type="file" name="foto">

                        <br/><br/>
                        Deskripsi Produk 
                        <textarea id="editor" name="deskripsi">{{ $tampilkan->deskripsi }}</textarea>

                       
                        <br/><br/>
                        <input type="submit" name="submit" value="Perbarui" class="btn btn-primary">
                        <input type="reset" name="reset" value="Cancel" class="btn btn-warning">
                        <a href="{{ url('/themes_postproduk') }}" name="kembali" value="Cancel" class="btn btn-success">Kembali</a>

                    </form>
                </div>
                    
            </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} )
</script>
<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
<script>
  function createslug()
  {
    var judul = $('#judul').val();
    $('#slug').val(slugify(judul));
    $('#slug1').val(slugify(judul));
  }

  function slugify(text)
  {
    return text.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text
  }
</script>
@endsection

