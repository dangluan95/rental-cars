<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Rental Car - Home Page</title>

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.png')}}" />

		<link href="{{asset('assets/frontend/css/master.css')}}" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('assets/frontend/assets/switcher/css/switcher.css')}}" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/frontend/assets/switcher/css/color1.css')}}" title="color1" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/frontend/assets/switcher/css/color2.css')}}" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/frontend/assets/switcher/css/color3.css')}}" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/frontend/assets/switcher/css/color4.css')}}" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/frontend/assets/switcher/css/color5.css')}}" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('assets/frontend/assets/switcher/css/color6.css')}}" title="color6" media="all" />

	</head>
	<body class="m-index" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

		<!-- Loader -->
		<div id="page-preloader"><span class="spinner"></span></div>
		<!-- Loader end -->
		<!-- Start Switcher -->
		<div class="switcher-wrapper">	
			<div class="demo_changer">
				<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
				<div class="form_holder">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="predefined_styles">
								<div class="skin-theme-switcher">
									<h4>Color</h4>
									<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#f76d2b;"> </a>
									<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#de483d;"> </a>
									<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#228dcb;"> </a>
									<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#00bff3;"> </a>
									<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
									<a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->

		@include('layouts.frontend.partials.header')

		@yield('content')

		@include('layouts.frontend.partials.footer')
		<!--Main-->   
		<script src="{{asset('assets/frontend/js/jquery-1.11.3.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/modernizr.custom.js')}}"></script>

		<script src="{{asset('assets/frontend/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/waypoints.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/classie.js')}}"></script>

		<!--Switcher-->
		<script src="{{asset('assets/frontend/assets/switcher/js/switcher.js')}}"></script>
		<!--Owl Carousel-->
		<script src="{{asset('assets/frontend/assets/owl-carousel/owl.carousel.min.js')}}"></script>
		<!--bxSlider-->
		<script src="{{asset('assets/frontend/assets/bxslider/jquery.bxslider.js')}}"></script>
		<!-- jQuery UI Slider -->
		<script src="{{asset('assets/frontend/assets/slider/jquery.ui-slider.js')}}"></script>

		<!--Theme-->
		<script src="{{asset('assets/frontend/js/jquery.smooth-scroll.js')}}"></script>
		<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/jquery.placeholder.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/theme.js')}}"></script>

	</body>
</html>