<!-- Top Bar Start -->
<div class="topbar">

	<!-- LOGO -->
	<div class="topbar-left">
		<a href="{{route('admin.dashboard')}}" class="logo">
			<span>[Rental]<span>Cars</span></span>
			<i class="mdi mdi-layers"></i>
		</a>
	</div>

	<!-- Button mobile view to collapse sidebar menu -->
	<div class="navbar navbar-default" role="navigation">
		<div class="container">

			<!-- Navbar-left -->
			<ul class="nav navbar-nav navbar-left">
				<li>
					<button class="button-menu-mobile open-left
					waves-effect">
						<i class="mdi mdi-menu"></i>
					</button>
				</li>
				<li class="hidden-xs"><a href="{{route('home')}}"
				class="menu-item">
				<i class="fa fa-home"></i> Website</a></li>
				<li class="dropdown hidden-xs"><a data-toggle="dropdown"
					class="dropdown-toggle menu-item" href="#" 
					aria-expanded="false">English
						<span class="caret"></span>
				</a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="#">English</a></li>
						<li><a href="#">Vietnamese</a></li>
					</ul></li>
			</ul>

			<!-- Right(Notification) -->
			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown user-box">
					<a href=""
    					class="dropdown-toggle waves-effect user-link"
    					data-toggle="dropdown" aria-expanded="true"> 
						<img
						src="{{isset(Sentinel::getUser()->avatar)?asset('storage/users/'.Sentinel::getUser()->avatar):asset('assets/avatar-default.png')}}" alt="user-img"
						class="img-circle user-img">
						Hi, {{Sentinel::getUser()->first_name}}
					</a>
					
					<ul
						class="dropdown-menu dropdown-menu-right 
						arrow-dropdown-menu arrow-menu-right 
						user-list notify-list">
						<li>
							<h5>Hi, {{Sentinel::getUser()->first_name}}</h5>
						</li>
						<li><a href="{{route('admin.profile')}}">
							<i class="ti-user m-r-5"></i> Profile</a>
						</li>
						<li><a href="{{route('admin.logout')}}">
							<i class="ti-power-off m-r-5"></i> Logout</a>
						</li>
					</ul>
				</li>

			</ul>
			<!-- end navbar-right -->

		</div>
		<!-- end container -->
	</div>
	<!-- end navbar -->
</div>
<!-- Top Bar End -->