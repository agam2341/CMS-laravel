<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Landing Page Berl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- master css -->
	@include('assets/css')
	<!-- internal css -->
	@yield('css')

</head>
<body class="theme-light is-smooth-effect" data-spy="scroll" data-target="#mainnav" data-offset="80">

	<header>
		@include('master/header')
	</header>

	<content>
		@yield('content')
	</content>

	<footer>
		@yield('footer')
	</footer>


	<!-- javascript -->
	@include('assets/js')
	<!--  javascript internal -->
	@yield('javascript')
</body>
</html>