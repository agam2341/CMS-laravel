
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
                    <h5>Silahkan Isi Data Dibawah Ini :</h5>
                    @include('assets/message')
                    <hr/>
                    <br/>
                    <form action="{{ url('/proses/themes_layouts') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                        <b>Masukan foto Background</b><br/>&nbsp;
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
                        <br/>
                        <b>Deskripsi</b><br/><br/>
                        
                        <textarea name="deskripsi" class="form-control my-editor">{!! old('content') !!}</textarea>
                        {{-- <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea> --}}
                        {{-- <textarea id="my-editor" name="deskripsi"></textarea> --}}

                        <br>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                        <input type="reset" name="reset" value="Batalkan" class="btn btn-danger">

                    </form>

                </div>
                <!--CARD-BODY-->   
            </div>
        <!--END CARD-->

        
        <!-- END-COL-->
            <br/>
        <div class="card">
            <div class="card-header" style="color:white;">Data Post Konten</div>
                <div class="card-body">
                    <table class="table table-default" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Background</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($data as $tampilkan)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{!! $tampilkan->deskripsi !!}</td>
                                    <td><img src="{{ $tampilkan->gambar }}" style="width: 100px; height: 100px;"></td>
                                    <td>
                                        <a href="{{ url('/hapuscontent') }}/{{ $tampilkan->id }}" class="btn btn-danger">Hapus</a>
                                        <a href="{{ url('/editcontent') }}/{{ $tampilkan->id }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <!--CARDBODY-->    
            </div>
            <!--CARD-->
        </div>
        <!--END ROW JUSTIFY-->
   </div>
   <!--END COL-->
</div>
<!--END CONTAINER-->
@endsection

@section('javascript')
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script> --}}

{{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> --}}
{{-- <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script> --}}

@include('assets/javascript')
@endsection