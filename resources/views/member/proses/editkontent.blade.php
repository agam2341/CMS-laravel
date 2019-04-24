
@extends ('layouts.app')

@section('css')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/inline/ckeditor.js"></script>
@endsection

@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary" href="{{ url('/home') }}" style="margin-bottom:10px;">Kembali ke Menu</a>
            <div class="card">
                <div class="card-body">
                    <h5>Silahkan Edit Data Dibawah Ini :</h5>
                    @include('assets/message')
                    <hr/>
                    <br/>
                    <form action="{{ url('/proseseditkontent') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                        <b>Masukan foto Background</b><br/>&nbsp;
                        <div class="row">
                        <input type="hidden" value="{{$tampilkan->id}}" name="id">
                            <div class="col-sm-5">
                                <input type="file" name="foto" value="index.jpg"  id="file" onchange="return fileValidation()" />
                            </div>
                            <div class="col-sm-7">
                                <div class="card">
                                <!-- Image preview -->
                                <div class="card-body">
                                    <div id="imagePreview">
                                        <img src="{{$tampilkan ->gambar}}" style="width: 50%; height: 50%;">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <b>Deskripsi</b><br/><br/>
                         <textarea class="form-control my-editor"name="deskripsi">{{$tampilkan->deskripsi}}</textarea>

                        <br>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                        <input type="reset" name="reset" value="Batalkan" class="btn btn-danger">

                    </form>

                </div>
                <!--CARD-BODY-->   
            </div>
        <!--END CARD-->
        </div>
        <!--END COL-->
   </div>
   <!--END COL-->
</div>
<!--END CONTAINER-->
@endsection

@section('javascript')
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@include('assets/javascript')
@endsection