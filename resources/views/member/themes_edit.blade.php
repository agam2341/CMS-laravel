
@extends ('layouts.app')

@section('css')
    <!-- 
        <script defer src="https://cdn.ckeditor.com/ckeditor5/11.2.0/inline/ckeditor.js"></script>
    -->
@endsection

@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a class="btn btn-primary" href="{{ url('/home') }}" style="margin-bottom:10px;">Kembali ke Menu</a>
            <div class="card">
                <div class="card-body">
                    <h5>Silahkan Isi Data Dibawah Ini :</h5>
                    @include('assets/message')
                    <hr/>
                    <br/>
                    <form action="{{ url('/proses/themes_edit') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                        <b>Masukan Judul Halaman :</b><br/>&nbsp;
                        <input type="text" autofocus="" name="title" autocomplete="off" placeholder ="{{ $tampilkan->title }}" class="form-control">

                        <br/>
                        <b>Embed Video</b> <br/>&nbsp;
                        <div class="row">
                            <div class="col-sm-5">
                                <textarea name="embedvideo"  class="form-control" style="height: 257px;" placeholder="Contoh:{{ $tampilkan->embedvideo }}"></textarea>
                            </div>
                            <div class="col-sm-7">
                                <div class="card">
                                <!-- Image preview -->
                                <div class="card-body">
                                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom:20px;">
                                        {!! $tampilkan->embedvideo !!}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

 
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

                        <br/><br/><br/>
                        <b>Keterangan Distributor/Agen</b><br/>&nbsp;

                        <textarea name="desc_landing" class="form-control my-editor">
                                {{ $tampilkan->desc_landing }}
                        </textarea>
                        <br/>
                        <b>Text Footer</b><br/>&nbsp;
                        <input type="text" class="form-control" name="footer" placeholder="{{ $tampilkan->footer }}">

                        <br/><br/>
                        <input type="submit" name="submit" value="Update" class="btn btn-success">
                        <input type="reset" name="reset" value="Batalkan" class="btn btn-danger">

                    </form>

                </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- 
<script defer src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
-->
@include('assets/javascript')
@endsection