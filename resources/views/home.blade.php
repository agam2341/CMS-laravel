@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @desktop
        <div class="col-md-8">
                @include ('assets/message')
            <div class="card">
                <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        @include('master/sidebar')
    
                </div>
            </div>
        </div>
        @enddesktop

        {{-- Tampilan Khusus buat Mobile --}}
        @mobile

        <div class="col-md-8">
        @include ('assets/message')
            <div class="card">
                <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        @include('master/sidebar')
    
                </div>
            </div>
        </div>
            @endmobile
        {{-- Tampilan Khusus buat Mobile --}}
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    

<script type="text/javascript">
        function readURL(input){
        if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
        $('#tampil').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }
        }
        $("#fupload").change(function(){
        readURL(this);
        $('#hasil').show();
                });
</script>

@endsection
