<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('desc')">
	<meta name="keywords" content="@yield('keywords')">
	<meta name="robots" content="index,follow">

	<title>Tourism | @yield('title')</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

	<!-- Bootstrap Select Option css -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap-select.min.css') }}">

	<!-- Slick Slider -->
	<link href="{{ asset('assets/plugins/slick-slider/slick.css') }}" rel="stylesheet">

	<!-- Icons -->
	<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/themify-icons/css/themify-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/line-icons/css/line-font.css') }}" rel="stylesheet">

	@yield('css-date')

	<!-- Animate -->
	<link href="{{ asset('assets/plugins/animate/animate.css') }}" rel="stylesheet">

	<!-- Bootsnav -->
	<link href="{{ asset('assets/plugins/bootstrap/css/bootsnav.css') }}" rel="stylesheet">

	<!-- Custom style -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/responsiveness.css') }}" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="{{ asset('assets/css/colors/main.css') }}">

  @yield('css')
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="home-2">
	<div class="wrapper">
		<!-- Start Navigation -->
		@include('includes.header')
		<!-- End Navigation -->
		<div class="clearfix"></div>

		@yield('content')

		<!-- ================ Start Footer ======================= -->
		@include('includes.footer')
		<!-- ================ End Footer Section ======================= -->

		<!-- ================== Login & Sign Up Window ================== -->
		@include('includes.modal')
		<!-- ===================== End Login & Sign Up Window =========================== -->

		<a id="back2Top" class="theme-bg" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


		<!-- START JAVASCRIPT -->
		<!-- Jquery js-->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

		<!-- Bootstrap js-->
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- Bootsnav js-->
		<script src="{{ asset('assets/plugins/bootstrap/js/bootsnav.js') }}"></script>
		<script src="{{ asset('assets/js/viewportchecker.js') }}"></script>

		<!-- Slick Slider js-->
		<script src="{{ asset('assets/plugins/slick-slider/slick.js') }}"></script>

		@yield('js-date')

		<!-- counter js-->
		<script src="{{ asset('assets/plugins/jquery-counter/js/waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/jquery-counter/js/jquery.counterup.min.js') }}"></script>

		<script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>

		<!-- Custom Js -->
		<script src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('js')

		<script>
			function openRightMenu() {
				document.getElementById("rightMenu").style.display = "block";
			}

			function closeRightMenu() {
				document.getElementById("rightMenu").style.display = "none";
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#styleOptions').styleSwitcher();
			});
		</script>

	</div>
</body>

</html>
