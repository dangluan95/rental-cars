<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>[Rental] Cars - @yield('title')</title>

  <link rel="stylesheet" 
  href="{{asset('assets/frontend/authentication/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" 
  href="{{asset('assets/frontend/authentication/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" 
  href="{{asset('assets/frontend/authentication/vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" 
  href="{{asset('assets/frontend/authentication/css/style.css')}}">
  <style>
  .error{
      color: red;
  }
  input[type="text"]{ padding: 11px 8px; line-height: 10px; border-radius: 5px;}
  input[type="password"]{ padding: 11px 8px; line-height: 10px; border-radius: 5px;}
</style>
  <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              @yield('content')
            </div>
            <br>
            <p class="footer-text text-center">
            	Copyright © 2018 by Lương Quốc Đại & Đặng Đức Luân.
            </p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets/frontend/authentication/vendors/js
  /vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/frontend/authentication/vendors/js
  /vendor.bundle.addons.js')}}"></script>
  <script 
  	src="{{asset('assets/frontend/authentication/js/off-canvas.js')}}">
  </script>
  <script 
  	src="{{asset('assets/frontend/authentication/js/misc.js')}}">
  </script>
  <script src="{{asset('assets/frontend/js/jquery.validate.min.js')}}"></script>
  @stack('js')
</body>
</html>