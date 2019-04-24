@extends('layouts/layout')

@section('content')

    <!-- menampilkan seluruh data  yang ada pada section -->
    @foreach($sectionstatus as $sectionstatus)
    
    @if($sectionstatus->status == "Aktif" && $sectionstatus->nama_section == "section1" )
    <!-- Header --> 
    <header class="site-header is-sticky">
        <!-- Navbar -->
        <div class="navbar navbar-expand-lg is-transparent" id="mainnav">
            <nav class="container">
                <a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="#">
                    <img class="logo logo-dark" alt="logo" src="images/logo.png" srcset="images/logo.png 2x">
                    <img class="logo logo-light" alt="logo" src="images/logo.png" srcset="images/logo.png 2x">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
                    <span class="navbar-toggler-icon">
                        <span class="ti ti-align-justify"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarToggle">
                    <ul class="navbar-nav animated" data-animate="fadeInDown" data-delay=".9">
                        <li class="nav-item"><a class="nav-link menu-link" href="#intro">Apa itu B erl<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#team">Produk B erl</a></li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#contact">Kontak Kami</a></li>
                    </ul>
                    <ul class="navbar-nav navbar-btns animated" data-animate="fadeInDown" data-delay="1.15">
                        @guest
                        {{-- <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{ url('/login') }}" style="color:#ffff;">Login</a></li> --}}
                        @else
                        <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{ url('/home') }}" style="color:#ffff;">Dashboard</a></li>
                        @endguest
                    </ul>
                </div>
               <a class="nav-link btn btn-sm btn-outline menu-link justify-content-end" href="#apps" style="color:#ffff;">Pemesanan</a></li>
            </nav>
        </div>
        <!-- End Navbar -->

        <!-- Banner/Slider -->
        <div id="header" class="banner banner-full banner-curb banner-particle d-flex align-items-center">
            <div class="container">
                <div class="banner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="header-txt tab-center mobile-center">

                                <!-- tambahan untuk edit secara langsung -->
                                <h1 class="animated" data-animate="fadeInUp" data-delay="1.25" style="color:goldenrod;">
                                    {!! $tampilkan->title !!}
                                </h1>
                                <ul class="btns animated" data-animate="fadeInUp" data-delay="1.45">

                                </ul>
                                <ul class="social">
                                    <!--SOCIAL MEDIA BUTTONS-->
                                </ul>
                            </div>
                        </div><!-- .col  -->
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="countdown-box countdown-header text-center d-none d-sm-block">
                                <img src="images/logo.png">
                            </div>
                                
                        </div>
                        </div><!-- .col  -->
                    </div><!-- .row  -->
                </div><!-- .banner-content  -->
            </div><!-- .container  -->
        </div>
        <!-- End Banner/Slider -->
    </header>
    <!-- End Header -->
    @endif

    @if($sectionstatus->status == "Aktif" && $sectionstatus->nama_section == "section2" )
    
    <!-- Start Section -->
<div class="section section-pad section-bg-alt nopb" style="background-color:{{ $warna -> warna}};">
        <div class="container">
            <div class="row align-items-center">
                <div class="embed-responsive embed-responsive-16by9" style="margin-bottom:50px;">
                    {!! $tampilkan->embedvideo !!}
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .conatiner  -->
    </div>
    <!-- Start Section -->
    @endif
    




    @if($sectionstatus->status == "Aktif" && $sectionstatus->nama_section == "section3" )
{{-- konten gambar --}}

    <!-- diperulangkan -->
    @foreach($content as $tampil)
    <div class="section no-pb section-bg-alt" style="background-color:{{ $warna -> warna}};">
        <div class="container">
            <div class="row">         
                <div class="imagebox" style="margin:5px;">
                    <img src="{{asset ($tampil->gambar)}}"  class="img-responsive">
                    <span class="imagebox-desc">
                    <h3 style="color:white;">{!! $tampil->deskripsi !!}</span></h3>
                </div>
            </div>
        </div>
    </div>
    
                
    @endforeach
    <!-- end perulangan -->
    
    <!-- Start Section -->
    <div class="section section-pad no-pb section-bg-alt" style="background-color:{{ $warna -> warna}};">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
                        <img src="{{ asset($tampilkan->fotolanding) }}" alt="gambar_2">
                    </div>
                </div><!-- .col  -->
                <div class="col-md-6 offset-md-1">
                    <div class="text-block">
                        <div id="intro">
                            {!! $tampilkan->desc_landing !!}
                        </div>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .container  -->
    </div><!--endsection-->

    <!-- Start Section -->
    @endif

    @if($sectionstatus->status == "Aktif" && $sectionstatus->nama_section == "section3" )
    <div class="section section-pad no-pb section-bg-alt" style="background-color:{{ $warna -> warna}};">
        <div class="container" style="margin-top:40px;">
            <div id="demo" class="carousel slide" data-ride="carousel">
    
                <!-- Indicators -->
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="d-none d-sm-block">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="{{ asset($tampilkan->fotolanding) }}" alt="Los Angeles" width="1100" height="500" >
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{ asset($tampilkan->fotolanding) }}" alt="Los Angeles" width="1100" height="500" >
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="{{ asset($tampilkan->fotolanding) }}" alt="Chicago" width="1100" height="500" >
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{ asset($tampilkan->fotolanding) }}" alt="Chicago" width="1100" height="500" >
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="{{ asset($tampilkan->fotolanding) }}" alt="New York" width="1100" height="500" class="img-responsive">
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{ asset($tampilkan->fotolanding) }}" alt="New York" width="1100" height="500" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
            
                
                <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                </div>
            </div>
    
            <div id="demo2" class="carousel slide" data-ride="carousel">
    
                    <!-- Indicators -->
                    
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="d-block d-sm-none">
                            <div class="carousel-item active">
                                <img src="{{ asset($tampilkan->fotolanding) }}" alt="Los Angeles" width="1100" height="500" >
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($tampilkan->fotolanding) }}" alt="Los Angeles" width="1100" height="500" >
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($tampilkan->fotolanding) }}" alt="Chicago" width="1100" height="500" >
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($tampilkan->fotolanding) }}" alt="Chicago" width="1100" height="500" >
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($tampilkan->fotolanding) }}" alt="New York" width="1100" height="500" >
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset($tampilkan->fotolanding) }}" alt="New York" width="1100" height="500" >
                            </div>
                        </div>
                
                    
                    <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo2" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                    </div>
                   <!--Carousel-inner--> 
                </div>
            <!--Carousel Slide-->
        </div>
    </div>
    <!-- Start Section -->
<div class="section section-pad" style="background-image:{{ $warna -> warna}};">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="section-head">
                        <div class="heading-animation">
                            <span class="line-1"></span><span class="line-2"></span>
                            <span class="line-3"></span><span class="line-4"></span>
                            <span class="line-5"></span><span class="line-6"></span>
                            <span class="line-7"></span><span class="line-8"></span>
                        </div>
                        <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">Testimoni B Erl Cosmetics
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-5" id="apps">
                    <!-- inidalah carousel -->
                    <div id="testimoni" class="carousel slide" data-ride="carousel">

                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#testimoni" data-slide-to="0" class="active"></li>
                        <li data-target="#testimoni" data-slide-to="1"></li>
                        <li data-target="#testimoni" data-slide-to="2"></li>
                      </ul>

                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img  src="{{ asset('/image/berl-face-serum1.jpg') }}" alt="Los Angeles">
                        </div>
                        @foreach($fototestimoni as $tampil)
                        <div class="carousel-item">
                          <img style="width: 100%; height: 450px;" src="{{ asset($tampil->fototestimoni) }}" alt="Los Angeles">
                        </div>
                        @endforeach
                       
                      </div>

                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#testimoni" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#testimoni" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>

                    </div>
                    <!-- end carousel -->
                </div><!-- .col  -->

                <div class="col-md-5 offset-md-1">
                        <ul class="btns">
                            <li class="animated" data-animate="fadeInUp" data-delay="0"><a href="{{ url('/pemesanan') }}" class="btn btn-sm">Klik disini untuk Pemesanan</a></li>
                        </ul>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->

        </div><!-- .container  -->
    </div>
    <!-- Start Section --> 
    @endif

    @if($sectionstatus->status == "Aktif" && $sectionstatus->nama_section == "section4" )
    <!-- Start Section -->
<div class="section section-pad no-pb section-bg-alt section-fix" id="team" style="background-color:{{ $warna -> warna }};">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="section-head">
                        <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0" >Produk Kosmetik B Erl
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach($post as $post)
                <div class="col-md-6 col-lg-4 d-inline-flex justify-content-center">
                            <div class="team-member animated" data-animate="fadeInUp" data-delay=".7">
                                <div class="team-photo">
                                    <img src="{{ asset($post->foto) }}" alt="{{ $post->foto }}">
                                    <a href="#team-profile-6{{ $post->id }}" class="expand-trigger content-popup"></a>
                                </div>
                                <div class="team-info">
                                    <h5 class="team-name">{{ $post->title }}</h5>
        
                                </div>
        
                                <!-- Start .team-profile  -->
                                <div id="team-profile-6{{ $post->id }}" class="team-profile mfp-hide">
                                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                                    <div class="container-fluid">
                                        <div class="row no-mg">
                                            <div class="col-md-6">
                                                <div class="team-profile-photo">
                                                    <img src="{{ asset($post->foto) }}" alt="{{ $post->foto }}">
                                                </div>
                                            </div><!-- .col  -->
        
                                            <div class="col-md-6">
                                                <div class="team-profile-info">
                                                    <h3 class="name">{{ $post->title }}</h3>
                                                    
                                                    {!! $post->deskripsi !!}
        
                                                </div>
                                            </div><!-- .col  -->
        
                                        </div><!-- .row  -->
                                    </div><!-- .container  -->
                                </div><!-- .team-profile  -->
        
                            </div>
                </div><!-- .col  -->
                @endforeach 

            </div><!-- .row  -->
            
    </div><!-- .container  -->
    </div><!-- .team-profile  -->
    @endif

    @if($sectionstatus->status == "Aktif" && $sectionstatus->nama_section == "section5" )
    <!-- 360 rotate -->
    <!-- kondisi untuk section dijlankan atau tidak -->
    <br/>
    <div class="paddedwrap">
        <div class="centercolumn">
            <div class="reloadexample">
                    <div class="borderadjust">
                        <div class="sizingwrap" id="wr360PlayerId">
                        </div>
                    </div>
                    <!--<a href="#" id="view1"><img style="width: 150px" src="{{ asset('/image/example.jpg') }}"/></a></li>-->
                    <a href="#" id="view2"><img style="width: 150px" src="{{ asset('/image/example.jpg') }}"/></a></li>
                    <a href="#" id="view3"><img style="width: 150px"src="{{ asset('/image/example.jpg') }}"/></a></li>
            </div>
        </div>
    </div>
    @endif

    @if($sectionstatus->status == "Aktif" && $sectionstatus->nama_section == "section6" )
    <!-- Start Section -->
    <div class="section section-pad section-bg-alt" id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col">

                    <div class="section-head">
                        <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">Kontak Kami
                            <span>Kontak</span>
                        </h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".1">Punya pertanyaan seputar B Erl Cosmetics ? Kami akan menjawabnya dengan secepatnya.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 offset-lg-2">
                    <ul class="contact-info">
                        <li class="animated" data-animate="fadeInUp" data-delay="0"><em class="fab fa-whatsapp" style="font-size:28px;margin-right:5px;"></em><span>{{ $tampilkan->phone }}</span></li>
                        <li class="animated" data-animate="fadeInUp" data-delay=".1"><em class="fab fa-instagram" style="font-size:28px;margin-right:5px;"></em><span>{{ $tampilkan->email }}m</span></li>
                        <li class="animated" data-animate="fadeInUp" data-delay=".1"><em class="fab fa-facebook-square" style="font-size:28px;margin-right:5px;"></em><span>{{ $tampilkan->email }}m</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
    @endif

    @if($sectionstatus->status == "Aktif" && $sectionstatus->nama_section == "section7" )
    <!-- Start Section -->
    <div class="section subscribe-section section-pad-md section-bg section-connect">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 offset-md-3">
                    <h4 class="section-title-md animated" data-animate="fadeInUp" data-delay="0">{{ $tampilkan->footer }}</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Start Section -->
    <div class="section footer-scetion no-pt section-pad-sm section-bg" style="background-image:;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <ul class="social" style="margin-top:20px;">
                            <li class="animated" data-animate="fadeInUp" data-delay="1.5"><a target="_blank" href="{{ $tampilkan->fb }}"><em class="fab fa-facebook-f"></em></a></li>
                            {{-- <li class="animated" data-animate="fadeInUp" data-delay="1.55"><a target="_blank" href="{{ $tampilkan->tw }}"><em class="fab fa-twitter"></em></a></li> --}}
                            <li class="animated" data-animate="fadeInUp" data-delay="1.6"><a target="_blank" href="{{ $tampilkan->yt }}"><em class="fab fa-youtube"></em></a></li>
                            <li class="animated" data-animate="fadeInUp" data-delay="1.7"><a target="_blank" href="{{ $tampilkan->wa }}"><em class="fab fa-whatsapp"></em></a></li>
                            <li class="animated" data-animate="fadeInUp" data-delay="1.75"><a target="_blank" href="{{ $tampilkan->ig }}"><em class="fab fa-instagram"></em></a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
    @endif

    @endforeach


    <!-- Preloader !remove please if you do not want -->
    
    <!-- Preloader End -->

    <!-- 360 rotate -->
    {{-- <div style="background-color: transparent;"  id="wr360PlayerId"> --}}

@endsection