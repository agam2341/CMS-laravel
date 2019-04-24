
@extends ('layouts.app')

@section('css')
    <!-- 
        <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/inline/ckeditor.js"></script>
    -->
    <link href="css\spectrum.css" type="text/css" rel="stylesheet" />
@endsection

@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a class="btn btn-primary" href="{{ url('/home') }}" style="margin-bottom:10px;">Kembali ke Menu</a>
            <div class="card">
                <div class="card-body">
                    <h5>Pengaturan ganti Background    :</h5>
                    @include('assets/message')
                    <hr/>
                    <br/>
                    <form action="{{ url('/proses/themes_color') }}" method="POST" id='formColor' enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <table class="table table-default">
                        <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Layout</td>
                                    <td>Aksi</td>
                                    <td>Status</td>
                                </tr>
                        </thead>

                        <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Layout Background</td>
                                    <td>
                                        <!--
                                            
                                            @desktop
                                        <input type="radio" name="warna" value = "white">White  
                                        <input type="radio" name="warna" value = "gold">Gold<br>
                                        <input type="radio" name="warna" value = "black">Black
                                        @enddesktop

                                        @mobile
                                        <input type="radio" name="warna" value = "white">White
                                        <input type="radio" name="warna" value = "gold">Gold<br>
                                        <input type="radio" name="warna" value = "black">Black
                                        @endmobile
                                    -->
                                        
                                        <input type='hidden' id="warna" name="warna" />
                                        <input type='text' id="custom" />
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>

                        </tbody>
                    </table>

                        <input type="button" id='btnSubmit' value="SIMPAN" class="btn btn-success" name="simpan">
                        <input type="reset" value="BATALKAN" class="btn btn-danger" name="simpan">
                    
                    </form>

                </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@include('assets/javascript')

<script defer>
    $(document).ready(function () {
        $("#custom").spectrum({
            color: "#f00"
        });

        $("#btnSubmit").click(function () {
            // console.log("warna: " + $("#warna").spectrum("get").toHexString());
            $("#warna").val($("#custom").spectrum("get").toHexString());
            $("#formColor").submit();
        });
    });
</script>
@endsection

