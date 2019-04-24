@extends('layouts.app')

    
@section('title', 'Dashboard Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-8">
                <a class="btn btn-primary" href="{{ url('/home') }}" style="margin-bottom:10px;">Kembali ke Menu</a>
            <div class="card">
                <div class="card-body">
                    @include('assets/message')
                    <form action="{{ url('/proses/themes_postproduk') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                        <b>Judul Produk :</b><br/><br/>
                        <div class="field">
		               		<input type="text" required name="title" class="form-control" id="judul" placeholder="Masukan Judul Postingan" onkeyup="createslug()">
			            </div>
			            <div class="field">
			               <input type="hidden" class="form-control" name="slug" id="slug1" placeholder="Slug">
			            </div>

                        <br/>
                        <b>Masukan foto disini</b><br/>&nbsp;
                        <div class="row">
                            <div class="col-sm-5">
                                <input type="file" name="foto" value="index.jpg"  id="file" onchange="return fileValidation()" />
                            </div>
                            <div class="col-sm-7">
                                <div class="card">
                                <!-- Image preview -->
                                <div class="card-body">
                                    <div id="imagePreview"></div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <br/><br/>
                        <b>Deskripsi Produk</b><br/><br/>
                        <textarea name="deskripsi" class="form-control my-editor"></textarea>

                       
                        <br/><br/>
                        <input type="submit" name="submit" value="Update" class="btn btn-success">
                        <input type="reset" name="reset" value="Cancel" class="btn btn-danger">

                    </form>
                </div>
                    
            </div>
            <br/>
            <div class="card">

                <div class="card-header">Data Post Produk</div>

                <div class="card-body">
                    <table class="table table-default" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Post Produk</th>
                                <th>Kegiatan</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($tampilkan as $tampilkan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $tampilkan->title }}</td>
                                <td>
                                    <a href="{{ url('/hapuspost') }}/{{ $tampilkan->slug }}" class="btn btn-danger btn-block">Hapus</a>
                                    <a href="{{ url('/editpost') }}/{{ $tampilkan->slug }}" class="btn btn-primary btn-block">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    
            </div>



            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    @include('assets/javascript')
@endsection

