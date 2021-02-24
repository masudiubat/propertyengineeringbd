<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->


<!-- Mirrored from html.lionode.com/civil-engineer/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 23:28:04 GMT -->

<head>
	@include('partials.frontend.head')
</head>

<body id="home">
	<!-- =====  LODER  ===== -->
	<div class="loder"></div>
	<div class="wrapper">
		<!-- =====  HEADER START  ===== -->
		<header id="header">
			<!-- Start Navigation -->
			@include('partials.frontend.navbar')
			<!-- End Navigation -->
			<div class="clearfix"></div>
		</header>
		<!-- =====  HEADER END  ===== -->
		@yield('content')
		@include('partials.frontend.footer')
	</div>
	<!-- =====  WRAPPER END  ===== -->
	<!-- =====  SCRIPT START  ===== -->
	@include('partials.frontend.default-js')
	<!-- =====  SCRIPT END  ===== -->
</body>


<!-- Mirrored from html.lionode.com/civil-engineer/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 23:31:39 GMT -->

</html>