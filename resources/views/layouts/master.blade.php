<!DOCTYPE html>
<html lang="en">
<head>

	<title>Landing Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="js/webfontloader.min.js"></script>

	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Bootstrap/dist/css/bootstrap-reboot.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Bootstrap/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Bootstrap/dist/css/bootstrap-grid.css')}}">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fonts.min.css')}}">



</head>

<body class="landing-page">


@yield('content')

<!-- JS Scripts -->
<script src="{{asset('assets/js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('assets/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/jquery.matchHeight.js')}}"></script>
<script src="{{asset('assets/js/svgxuse.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.js')}}"></script>
<script src="{{asset('assets/js/Headroom.js')}}"></script>
<script src="{{asset('assets/js/velocity.js')}}"></script>
<script src="{{asset('assets/js/ScrollMagic.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/material.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/js/smooth-scroll.js')}}"></script>
<script src="{{asset('assets/js/selectize.js')}}"></script>
<script src="{{asset('assets/js/swiper.jquery.js')}}"></script>
<script src="{{asset('assets/js/moment.js')}}"></script>
<script src="{{asset('assets/js/daterangepicker.js')}}"></script>
<script src="{{asset('assets/js/simplecalendar.js')}}"></script>
<script src="{{asset('assets/js/fullcalendar.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.js')}}"></script>
<script src="{{asset('assets/js/ajax-pagination.js')}}"></script>
<script src="{{asset('assets/js/Chart.js')}}"></script>
<script src="{{asset('assets/js/chartjs-plugin-deferred.js')}}"></script>
<script src="{{asset('assets/js/circle-progress.js')}}"></script>
<script src="{{asset('assets/js/loader.js')}}"></script>
<script src="{{asset('assets/js/run-chart.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/jquery.gifplayer.js')}}"></script>
<script src="{{asset('assets/js/mediaelement-and-player.js')}}"></script>
<script src="{{asset('assets/js/mediaelement-playlist-plugin.min.js')}}"></script>

<script src="{{asset('assets/js/base-init.js')}}"></script>
<script defer src="{{asset('assets/fonts/fontawesome-all.js')}}"></script>

<script src="{{asset('assets/Bootstrap/dist/js/bootstrap.bundle.js')}}"></script>

</body>
</html>