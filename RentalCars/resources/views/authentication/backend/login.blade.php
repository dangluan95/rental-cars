<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('favicon.png')}}">
<!-- App title -->
<title>Admin Authentication</title>

<!-- App css -->
<link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet"
type="text/css" />
<link href="{{asset('assets/backend/css/core.css')}}" rel="stylesheet" 
type="text/css" />
<link href="{{asset('assets/backend/css/components.css')}}" rel="stylesheet" 
type="text/css" />
<link href="{{asset('assets/backend/css/icons.css')}}" rel="stylesheet" 
type="text/css" />
<link href="{{asset('assets/backend/css/pages.css')}}" rel="stylesheet" 
type="text/css" />
<link href="{{asset('assets/backend/css/menu.css')}}" rel="stylesheet" 
type="text/css" />
<link href="{{asset('assets/backend/css/responsive.css')}}" rel="stylesheet" 
type="text/css" />

<script src="{{asset('assets/backend/js/modernizr.min.js')}}"></script>
<style>
.error{
    color: red;
}
</style>
</head>

<body class="bg-transparent">

	<!-- HOME -->
	<section>
		<div class="container-alt">
			<div class="row">
				<div class="col-sm-12">

					<div class="wrapper-page">

						<div class="m-t-40 account-pages">
							<div class="text-center account-logo-box">
								<h2 class="text-uppercase">
									<a href="{{url('/admin')}}" 
									class="text-success"> 
										<span class="text-white">
										Admin Authentication</span>
									</a>
								</h2>
							</div>
							<div class="account-content">
								<form class="form-horizontal" 
								id="admin-login" method="post">
									<div style="display: none"
									class="alert alert-danger error errorLogin">
                                		<button type="button" class="close" 
                                		data-dismiss="alert" aria-hidden="true">
                                		&times;</button>
                                		<p style="color: red; display: none"
                                		class="error errorLogin"></p>
                                	</div>
									<div class="form-group ">
										<div class="col-xs-12">
											<input id="email" name="email" 
											type="text" class="form-control"
											placeholder="Enter Email">
										</div>
									</div>

									<div class="form-group">
										<div class="col-xs-12">
											<input id="password"
											class="form-control" 
											type="password" name="password" 
											placeholder="Enter Password">
										</div>
									</div>

									<div class="form-group ">
										<div class="col-xs-12">
											<div 
											class="checkbox checkbox-success">
												<input id="checkbox-signup" 
												type="checkbox" checked> 
												<label for="checkbox-signup"> 
												Remember me </label>
											</div>

										</div>
									</div>

									<div class="form-group text-center m-t-30">
										<div class="col-sm-12">
											<a href="page-recoverpw.html" 
											class="text-muted">
											<i class="fa fa-lock m-r-5"></i> 
											Forgot your password?</a>
										</div>
									</div>

									<div class="form-group account-btn 
									text-center m-t-10">
										<div class="col-xs-12">
											<button
												class="btn w-md btn-bordered 
												btn-danger waves-effect 
												waves-light" type="submit">
												Log In
											</button>
										</div>
									</div>

								</form>

								<div class="clearfix"></div>

							</div>
						</div>
						<!-- end card-box-->

					</div>
					<!-- end wrapper -->

				</div>
			</div>
		</div>
	</section>
	<!-- END HOME -->

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

	<!-- App js -->
	<script src="{{asset('assets/backend/js/jquery.core.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.app.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.validate.min.js')}}"></script>
    <script>
    	$(function(){
    		$('#admin-login').validate({
    			rules: {
    				email: {
    					required: true,
    					email: true,
    				},
    				password:{
    					required: true,
    					minlength: 8
    				}
    			},
    			submitHandler: function () {
    				$.ajaxSetup({
    				    headers: {
    				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    				    }
    				});
    				$.ajax({
    					'url' : 'admin',
    					'data': {
    						'email': $('#email').val(),
    						'password': $('#password').val(),
    					},
    					'type': 'POST',
    					success: function (data) {
    						console.log(data);
    						if(data.error == true){
    							$('.error').hide();
    							if(data.message.email != undefined){
    								$('.errorEmail').show().text(data.message.email[0]);
    							}
    							if(data.message.password != undefined){
    								$('.errorPassword').show().text(data.message.password[0]);
    							}
    							if(data.message.errorlogin != undefined){
    								$('.errorLogin').show().text(data.message.errorlogin[0]);
    							}
    						} else {
    							window.location.href = "/admin/dashboard";
    						}
    					}
    				});
    			}
    		});
    	});
    </script>
</body>
</html>