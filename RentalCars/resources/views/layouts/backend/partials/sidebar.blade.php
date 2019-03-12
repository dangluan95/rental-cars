<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
	<div class="sidebar-inner slimscrollleft">

		<!--- Sidemenu -->
		<div id="sidebar-menu">
			<ul>
				<li class="menu-title">Navigation</li>

				<li class="has_sub">
					<a href="{{route('admin.dashboard')}}" class="waves-effect">
						<i class="mdi mdi-view-dashboard"></i>
						<span> Dashboard </span>
					</a>
				</li>

				<li class="has_sub">
					<a href="javascript:void(0);"
    					class="waves-effect"><i class="fa fa-cogs"></i>
    					<span> Category & Product</span>
    				</a>
					<ul class="list-unstyled">
						<li>
							<a href="{{route('admin.manufacter.index')}}">
								<i class="fa fa-building-o"></i>Manufacters
							</a>
						</li>
						<li>
							<a href="{{route('admin.seat.index')}}">
								<i class="fa fa-wheelchair-alt"></i>Seats
							</a>
						</li>
						<li>
							<a href="{{route('admin.car.index')}}">
								<i class="fa fa-car"></i>Cars
							</a>
						</li>
					</ul>
				</li>
				
				<li class="has_sub">
					<a href="javascript:void(0);"
    					class="waves-effect"><i class="fa fa-newspaper-o"></i>
    					<span> Posts</span>
    				</a>
					<ul class="list-unstyled">
						<li>
							<a href="{{route('admin.category.index')}}">
								<i class="fa fa-tags"></i>Categories
							</a>
						</li>
						<li>
							<a href="{{route('admin.post.index')}}">
								<i class="fa fa-th-list"></i>Collection
							</a>
						</li>
					</ul>
				</li>
					
				<li class="has_sub">
					<a href="{{route('admin.contact')}}" class="waves-effect">
						<i class="fa fa-phone-square"></i>
						<span> Contact </span>
					</a>
				</li>
					
				<li class="has_sub">
					<a href="{{route('admin.banner')}}" class="waves-effect">
						<i class="fa fa-file-image-o"></i>
						<span> Logo & Slide </span>
					</a>
				</li>

		</div>
		<!-- Sidebar -->
		<div class="clearfix"></div>

		<div class="help-box">
			<h5 class="text-muted m-t-0">For Help ?</h5>
			<p class="">
				<span class="text-custom">Email:</span> 
				<br /> quocdai.ptit@gmail.com
			</p>
			<p class="m-b-0">
				<span class="text-custom">Call:</span> 
				<br /> (+84) 975.783.635
			</p>
		</div>

	</div>
	<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->