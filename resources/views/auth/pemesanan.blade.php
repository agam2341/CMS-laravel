@extends('layouts/layout')

@section('content')

<body class="theme-light" data-spy="scroll" data-target="#mainnav" data-offset="80">

    <div class="user-page d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-8 text-center">
                    <div class="user-page-box">
                        <div class="user-logo">
                            <a href="{{url ('/')}}">
                                <img src="{{asset ('images/logo.png')}}"  srcset="{{asset ('images/logo.png')}}" alt="icon">
                            </a>
                        </div>
                        <span class="small-heading">Masukan Pesanan</span>
                        <form action="{{ url('/prosespemesanan') }}" method="POST" class="login-form">
                            @csrf()
                            <div class="input-item">
                                <input type="text" name="nama" placeholder="Penerima" class="input-line-simple">
                            </div>
                            <div class="input-item">
                                <input type="text" name="nomerhp" placeholder="No Hp Penerima" class="input-line-simple">
                            </div>
                            <div class="input-item">
                                <input type="text"  name="alamat" placeholder="Alamat lengkap" class="input-line-simple">
                            </div>
                            <div class="input-item">
                                <input type="number" name="kodepos" placeholder="Kode Pos" class="input-line-simple">
                            </div>
                            <div class="input-item">
                                <input type="text" name="barangpesanan" placeholder="Produk yg dipesan" class="input-line-simple">
                            </div>
                            <div class="text-right" style="margin-top:5em;">
                                <a href="{{ url('/') }}">< Kembali Kehalaman </a>
                                <button class="btn btn-sm">Kirim Pesanan</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
	<!-- Preloader !remove please if you do not want -->
	<div id="preloader">
		<div id="loader"></div>
		<div class="loader-section loader-top"></div>
   		<div class="loader-section loader-bottom"></div>
	</div>
	<!-- Preloader End -->

	<!-- JavaScript (include all script here) -->
@endsection
