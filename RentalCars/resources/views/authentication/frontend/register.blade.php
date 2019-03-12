@extends('authentication.frontend.common')
@section('title','Register')
@section('content')
<form action="#" method="post" role="form" id="form-register">
	<div class="alert alert-success notice" style="display: none">
		<button type="button" class="close" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
		</button>
		<p style="color: green;" class="error notice"></p>
	</div>
    <div class="form-group">
        <input type="text" class="form-control" id="first-name"
        name="first_name" placeholder="Enter First Name">
		<p style="color: red; display: none" class="error errorFirstname"></p>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="last-name"
        name="last_name" placeholder="Enter Last Name">
		<p style="color: red; display: none" class="error errorLastname"></p>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="email"
        name="email" placeholder="Enter Email">
        <p style="color: red; display: none" class="error errorEmail"></p>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="password"
        name="password" placeholder="Enter Password">
        <p style="color: red; display: none" class="error errorPassword"></p>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="confirm-password"
        name="confirm_password" placeholder="Confirm Password">
        <p style="color: red; display: none" class="error errorConfirm"></p>
    </div>
    <div class="form-group d-flex justify-content-left">
      <div class="form-check form-check-flat mt-0">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" checked>
          I agree to the terms
        </label>
      </div>
    </div>
    <div class="form-group">
      <button class="btn btn-primary submit-btn btn-block" 
      type="submit" name="register" id="register">Register</button>
    </div>
    <div class="text-block text-center my-3">
      <span class="text-small font-weight-semibold">
      Already have and account ?</span>
      <a href="{{url('/login')}}" class="text-black text-small">Login</a>
    </div>
</form>
@endsection
@push('js')
<script>
	$(function(){
		$('#form-register').validate({
			rules: {
				first_name: {
					required: true,
				},
				last_name: {
					required: true,
				},
				email: {
					required: true,
					email: true,
				},
				password:{
					required: true,
					minlength: 8,
				},
				confirm_password: {
					required: true,
					minlength: 8,
					equalTo: "#password",
				}
			},
			submitHandler: function () {
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				$.ajax({
					'url' : 'register',
					'data': {
						'first_name': $('#first-name').val(),
						'last_name': $('#last-name').val(),
						'email': $('#email').val(),
						'password': $('#password').val(),
						'confirm_password': $('#confirm-password').val(),
					},
					'type': 'POST',
					success: function (data) {
						console.log(data);
						if(data.error == true){
							$('.error').hide();
							if(data.message.first_name != undefined){
								$('.errorFirstname').show().text(data.message.first_name[0]);
							}
							if(data.message.last_name != undefined){
								$('.errorLastname').show().text(data.message.last_name[0]);
							}
							if(data.message.email != undefined){
								$('.errorEmail').show().text(data.message.email[0]);
							}
							if(data.message.password != undefined){
								$('.errorPassword').show().text(data.message.password[0]);
							}
							if(data.message.confirm_password != undefined){
								$('.errorConfirm').show().text(data.message.confirm_password[0]);
							}
						} else {
							$('.notice').show().text(data.message.notice[0]);
						}
					}
				});
			}
		});
	});
</script>
@endpush