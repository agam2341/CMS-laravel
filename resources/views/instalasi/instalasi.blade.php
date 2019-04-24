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
					<form action="{{ url('/instalasi') }}" method="GET">
						<!-- tambahan untuk edit secara langsung -->
						<h4 class="animated" data-animate="fadeInUp" data-delay="1.25" style="color:goldenrod;">
							Hallo! Selamat Datang di LandingPage Baru Anda
						</h4>
						<label style="color: goldenrod;">Masukan Nama Anda :</label><br/>
						<input required="" type="text" style="width: 300px;" name="nama"><br/>

						<label style="color: goldenrod;">Masukan Nama Email Anda :</label><br/>
						<input type="text" required="" style="width: 300px;" name="email"><br/>

						<label style="color: goldenrod;">Buat Password Anda :</label><br/>
						<input type="password" required="" style="width: 300px;" name="password"><br/>

						<label style="color: goldenrod;">Ulangi password :</label><br/>
						<input type="password" required="" style="width: 300px;" name="ulangpassword"><br/>

						<br/>
						<input type="submit" value="BUAT LANDING PAGE" name="" class="btn btn-primary">
					</form>
				</div>
			</div><!-- .col  -->
		</div>
		<!-- End Banner/Slider -->
	</header>
	<!-- End Header -->
@endsection