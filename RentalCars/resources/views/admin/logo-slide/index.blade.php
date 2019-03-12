@extends('layouts.backend.common')
@section('title','Management Manufacters')
@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Logo & Slide</h4>
					<ol class="breadcrumb p-0 m-0">
						<li>
							<a href="{{route('admin.dashboard')}}">
								Renatal Cars
							</a>
						</li>
						<li>Logo & Slide</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- end row -->

		<div class="row">
			<div class="col-sm-12">
				<div class="card-box">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="col-md-3">
								<h4>Logo</h4>
							</div>
							<div class="col-md-9">
								<img src="{{asset('assets/frontend/images/logo/logo.png')}}" alt="" />
							</div>
    						
    						
    					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- container -->
</div>
<!-- content -->
@endsection