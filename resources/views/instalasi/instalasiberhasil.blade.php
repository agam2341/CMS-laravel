@extends('layouts/layout')

@section('content')
	<!-- Header --> 
	<header class="site-header is-sticky">
		<!-- Navbar -->
		<div class="navbar navbar-expand-lg is-transparent" id="mainnav">
			<nav class="container">
				<a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="#">
					<img class="logo logo-dark" alt="logo" src="images/logo.png" srcset="images/logo.png 2x">
					<img class="logo logo-light" alt="logo" src="images/logo.png" srcset="images/logo.png 2x">
				</a>
			</nav>
		</div>
		<!-- End Navbar -->

		<!-- Banner/Slider -->
		<div id="header" class="banner banner-full banner-curb banner-particle d-flex" style="text-align: center;">
			<div class="col-lg-12">
				<div class="header-txt tab-center mobile-center" style="margin-top: 100px;">
					
					<h4 class="animated" data-animate="fadeInUp" data-delay="1.25" style="color:goldenrod;">
							Hallo! {{ $nama }} <br/>Selamat! Landing Page Anda Sudah Bisa Digunakan
							<br/><br/>
							<a href="{{ url('/') }}" class="btn btn-primary">Lihat Halaman Landing Page</a>
							<a href="{{ url('/login') }}" class="btn btn-primary">Masuk Halaman Dashboard</a>

					</h4>

				</div>
			</div><!-- .col  -->
		</div>
		<!-- End Banner/Slider -->
	</header>
	<!-- End Header -->
@endsection