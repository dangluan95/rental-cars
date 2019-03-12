<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<!-- App favicon -->
<link rel="shortcut icon"
	href="{{asset('assets/backend/images/favicon.ico')}}">
<!-- App title -->
<title>[Rental] Cars - @yield('title')</title>
@stack('tablecss')
<!--Morris Chart CSS -->
<link rel="stylesheet"
	href="{{asset('assets/backend/plugins/morris/morris.css')}}">
<!-- App css -->
<link href="{{asset('assets/backend/css/bootstrap.min.css')}}"
	rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/css/core.css')}}" rel="stylesheet"
	type="text/css" />
<link href="{{asset('assets/backend/css/components.css')}}"
	rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/css/icons.css')}}" rel="stylesheet"
	type="text/css" />
<link href="{{asset('assets/backend/css/pages.css')}}" rel="stylesheet"
	type="text/css" />
<link href="{{asset('assets/backend/css/menu.css')}}" rel="stylesheet"
	type="text/css" />
<link href="{{asset('assets/backend/css/responsive.css')}}"
	rel="stylesheet" type="text/css" />
<link rel="stylesheet"
	href="{{asset('assets/backend/plugins/switchery/switchery.min.css')}}">
<link rel="stylesheet"
	href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="{{asset('assets/backend/js/modernizr.min.js')}}"></script>
@stack('css')
</head>


<body class="fixed-left">

	<!-- Begin page -->
	<div id="wrapper">

		@include('layouts.backend.partials.header')

		@include('layouts.backend.partials.sidebar')

		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			@yield('content')
			<!-- content -->
		</div>

		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->

	</div>
	<!-- END wrapper -->
	@include('layouts.backend.partials.footer')


	<script>
            var resizefunc = [];
    </script>

	<!-- jQuery  -->
	<script src="{{asset('assets/backend/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/detect.js')}}"></script>
	<script src="{{asset('assets/backend/js/fastclick.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.blockUI.js')}}"></script>
	<script src="{{asset('assets/backend/js/waves.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.scrollTo.min.js')}}"></script>
	<script
		src="{{asset('assets/backend/plugins/switchery/switchery.min.js')}}">
	</script>
	
	<!-- Counter js  -->
	<script
		src="{{asset('assets/backend/plugins/waypoints/jquery.waypoints.min.js')}}">
	</script>
	<script
		src="{{asset('assets/backend/plugins/counterup/jquery.counterup.min.js')}}">
	</script>
	@stack('js')
	<!--Morris Chart-->
	<script 
		src="{{asset('assets/backend/plugins/morris/morris.min.js')}}">
	</script>
	
	<script
		src="{{asset('assets/backend/plugins/raphael/raphael-min.js')}}">
	</script>
	
	<!-- Dashboard init -->
	<script 
		src="{{asset('assets/backend/pages/jquery.dashboard.js')}}">
	</script>
	
	<!-- App js -->
	<script src="{{asset('assets/backend/js/jquery.core.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.app.js')}}"></script>
	@stack('table')
	<!-- Custome -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
    <script 
		src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js">
    </script>
    {!! Toastr::message() !!}
    <script>
		@if($errors->any())
			@foreach($errors->all() as $error)
				toastr.error('{{$error}}','Error',{
					closeButton: true,
					progressBar: true
				});
			@endforeach
		@endif
	</script>
</body>
</html>