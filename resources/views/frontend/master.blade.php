<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Designer a Personal Category Bootstrap Responsive Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Designer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="{{asset('public/frontend/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
	<!--gallery -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/')}}/css/cm-overlay.css" />
	<!-- //gallery -->
	<link href="{{asset('public/frontend/')}}/css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="{{asset('public/frontend/')}}/css/font-awesome.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!--//Custom Theme files-->
	<!-- js -->
	<script src="{{asset('public/frontend/')}}/js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- banner -->
    @include('frontend.include.header')
	<!-- //banner -->
	<!-- about -->
    @include('frontend.aboutme.aboutme')
	<!-- //about -->
	<!-- about-bottom -->
    @include('frontend.education.education')
	<!-- //about-bottom -->
	<!-- skills -->
    @include('frontend.skill.skill')
	
	@yield('mainContent')
	<!-- //menu -->
	<!-- services -->
    @include('frontend.service.service')
	<!-- //services -->
	<!-- contact -->
    @include('frontend.contract.contract')
	<!-- //contact -->
	<div class="agileits_w3layouts-footer">
		<p>© 2017 Designer. All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
	</div>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="{{asset('public/frontend/')}}/js/move-top.js"></script>
	<script type="text/javascript" src="{{asset('public/frontend/')}}/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
<script type="text/javascript" src="{{asset('public/frontend/')}}/js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('public/frontend/')}}/js/bootstrap.js"></script>
</body>
</html>