
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
                    <h5>Pengaturan panel Admin :</h5>
                    @include('assets/message')
                    <hr/>
                    <br/>
                    <form action="{{ url('/proses/themes_panel') }}" method="POST" enctype="multipart/form-data">
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
                                    <td>Layout Produk</td>
                                    <td>
                                        <input type="radio" name="section5" value="Aktif" active> Aktif 
                                        <br>
                                        <input type="radio" name="section5" value="Tidak Aktif"> Tidak Aktif
                                    </td>
                                    <td>
                                        <?php $tampil1 = $sectionstatus->where('nama_section', 'section5')->first(); ?>
                                        @if($tampil1->status == 'Aktif')
                                        <label class="btn-sm btn-primary">{{ $tampil1->status }}</label>
                                        @else
                                        <label class="btn-sm btn-danger">{{ $tampil1->status }}</label>
                                        @endif 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            <input type="submit" value="SIMPAN" class="btn btn-success" name="simpan">
                            <input type="reset" value="RESET" class="btn btn-danger" name="simpan">
                    </form>
                </div>
                <!--END CARD BODY-->     
            </div>
            <!--END CARD-->
        </div>
        <!--END COL MD -->
    </div>
</div>
<!--END CONTAINER-->
@endsection

@section('javascript')
@include('assets/javascript')
@endsection