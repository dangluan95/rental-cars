@extends('authentication.frontend.common')
@section('title','Login')
@section('content')
<form action="#" method="post" role="form" id="form-login">
	<div class="alert alert-danger error errorLogin" style="display: none">
		<button type="button" class="close" data-dismiss="alert"
		aria-hidden="true">&times;</button>
		<p style="color: red; display: none" class="error errorLogin"></p>
	</div>
    <div class="form-group">
        <label class="label">Email</label>
        <input id="email" name="email" value="{{old('email')}}"
        type="text" class="form-control" placeholder="Enter Email">
        <p style="color: red; display: none" class="error errorEmail"></p>
    </div>
    
    <div class="form-group">
		<label class="label">Password</label>
		<input type="password" id="password" class="form-control"
        name="password" placeholder="********" value="{{old('password')}}">
		<p style="color: red; display: none" class="error errorPassword"></p>
    </div>
    
    <div class="form-group">
      <button id="btn-login" type="submit"
      class="btn btn-primary submit-btn btn-block">
      Login</button>
    </div>
    <div class="form-group d-flex justify-content-between">
      <div class="form-check form-check-flat mt-0">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" checked> 
          Keep me signed in
        </label>
      </div>
      <a href="#" class="text-small forgot-password text-black">
      <i class="mdi mdi-lock"></i>&nbsp;Forgot Password</a>
    </div>
    
    <div class="text-block text-center my-3">
      <span class="text-small font-weight-semibold">Not a member ?</span>
      <a href="{{url('/register')}}" class="text-black text-small">
      Create new account</a>
    </div>
</form>
@endsection
@push('js')
<script>
	$(function(){
		$('#form-login').validate({
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
					'url' : 'login',
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
							window.location.href = "/";
						}
					}
				});
			}
		});
	});
</script>
@endpush