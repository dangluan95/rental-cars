<header class="b-topBar wow slideInDown" data-wow-delay="0.5s">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="b-topBar__addr">
					<span class="fa fa-map-marker"></span> 
					Tầng 2, Tòa nhà 3D, Duy Tân, Cầu Giấy, HN
				</div>
			</div>
			<div class="col-md-2 col-xs-6">
				<div class="b-topBar__tel">
					<span class="fa fa-phone"></span> 
					(+84).975.783.635
				</div>
			</div>
			
			<div class="col-md-2 col-xs-6">
				<div class="b-topBar__lang">
					<div class="dropdown">
						<a href="#" class="dropdown-toggle" 
						data-toggle='dropdown'>Language</a>
						<a class="m-langLink dropdown-toggle" 
						data-toggle='dropdown'
						href="#">
							<span class="b-topBar__lang-flag m-en"></span>EN
							<span class="fa fa-caret-down"></span>
						</a>
						<ul class="dropdown-menu h-lang">
							<li><a class="m-langLink dropdown-toggle" 
        						data-toggle='dropdown'
        						href="#">
								<span class="b-topBar__lang-flag m-en"></span>
								EN</a>
							</li>
							<li><a class="m-langLink dropdown-toggle" 
								data-toggle='dropdown'
								href="#">
								<span class="b-topBar__lang-flag m-vi"></span>
								VN</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-6">
				<nav class="b-topBar__nav">
					<ul>
						<li><a href="#">Cart</a></li>
						<li><a href="{{url('/register')}}">Register</a></li>
						<li><a href="{{url('/login')}}">Sign in</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<!--b-topBar-->

<nav class="b-nav">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-xs-4">
				<a href="{{route('home')}}">
					<img src="{{asset('assets/frontend/images/logo/logo.png')}}" alt="logo" />
				</a>
			</div>
			<div class="col-sm-9 col-xs-8">
				<div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" 
						data-toggle="collapse" data-target="#nav">
							<span class="sr-only">Toggle navigation</span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse navbar-main-slide" 
					id="nav">
						<ul class="navbar-nav-menu">
							<li class="dropdown"><a class="dropdown-toggle"
								data-toggle='dropdown' href="home.html">
								<i class="fa fa-home"></i>&nbsp;Home</a>
							</li>
							<li class="dropdown"><a class="dropdown-toggle"
								data-toggle='dropdown' href="#">Grid <span
									class="fa fa-caret-down"></span></a>
								<ul class="dropdown-menu h-nav">
									<li><a href="listings.html">listing 1</a></li>
									<li><a href="listingsTwo.html">listing 2</a></li>
									<li><a href="listTable.html">listing 3</a></li>
									<li><a href="listTableTwo.html">listing 4</a></li>
								</ul></li>
							<li><a href="compare.html">Compare</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="article.html">Services</a></li>
							<li>
								<a href="{{route('news')}}">News</a>
							</li>
							<li><a href="submit1.html">Shop</a></li>
							<li><a href="contacts.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>