@extends('layouts.backend.common') @section('title','Profile')
@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Profile</h4>
					<ol class="breadcrumb p-0 m-0">
						<li><a href="{{route('admin.dashboard')}}"> Renatal Cars </a></li>
						<li>Management</li>
						<li>Profile</li>
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
						<div class="col-md-4">
							<div class="text-center card-box">
								<div class="member-card">
									<div class="thumb-xl member-thumb m-b-10 center-block">
										<img src="{{isset(Sentinel::getUser()->avatar)?asset('storage/'.Sentinel::getUser()->avatar):asset('assets/backend/images/users/avatar-1.jpg')}}"
											class="img-circle img-thumbnail" alt="profile-image"> <i
											class="mdi mdi-star-circle member-star text-success"
											title="verified user"></i>
									</div>

									<div class="">
										<h4 class="m-b-5">{{Sentinel::getUser()->first_name}}</h4>
										<p class="text-muted">@admin</p>
									</div>

									<hr />

									<p class="text-muted font-13 m-t-20">Hi I'm Johnathn Deo,has
										been the industry's standard dummy text ever since the 1500s,
										when an unknown printer took a galley of type.</p>

									<hr />

									<div class="text-left">
										<p class="text-muted font-13">
											<strong>Full Name :</strong> <span class="m-l-15">{{Sentinel::getUser()->first_name}}&nbsp;{{Sentinel::getUser()->last_name}}</span>
										</p>

										<p class="text-muted font-13">
											<strong>Mobile :</strong><span class="m-l-15">(123) 123 1234</span>
										</p>

										<p class="text-muted font-13">
											<strong>Email :</strong> <span class="m-l-15">{{Sentinel::getUser()->email}}</span>
										</p>

										<p class="text-muted font-13">
											<strong>Location :</strong> <span class="m-l-15">USA</span>
										</p>
									</div>

								</div>

							</div>
							<!-- end card-box -->

						</div>
						<!-- end col -->

						<div class="col-md-8 card-box">

							<ul class="nav nav-tabs">
								<li class="active"><a href="#profile" data-toggle="tab"
									aria-expanded="false"> <span class="visible-xs"><i
											class="fa fa-home"></i></span> <span class="hidden-xs">Profile</span>
								</a></li>
								<li class=""><a href="#password" data-toggle="tab"
									aria-expanded="true"> <span class="visible-xs"><i
											class="fa fa-user"></i></span> <span class="hidden-xs">Change Password</span>
								</a></li>
								
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="profile">
									
										<form class="form-horizontal" role="form">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Avatar</label>
	                                                <div class="col-md-10">
	                                                    <input type="file" class="form-control">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label" for="example-email">Email</label>
	                                                <div class="col-md-10">
	                                                    <input value="{{Sentinel::getUser()->email}}" disabled class="form-control">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">First Name</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="{{Sentinel::getUser()->first_name}}">
	                                                </div>
	                                            </div>

	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Last Name</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="{{Sentinel::getUser()->last_name}}" placeholder="placeholder">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">About</label>
	                                                <div class="col-md-10">
	                                                    <textarea class="form-control" rows="5"></textarea>
	                                                </div>
	                                            </div>



	                                        </form>
									
								</div>
								<div class="tab-pane" id="password">
									<p>Donec pede justo, fringilla vel, aliquet nec, vulputate
										eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
										vitae, justo. Nullam dictum felis eu pede mollis pretium.
										Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi.
										Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
										eu, consequat vitae, eleifend ac, enim.</p>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
										Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
										natoque penatibus et magnis dis parturient montes, nascetur
										ridiculus mus. Donec quam felis, ultricies nec, pellentesque
										eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
								</div>
							</div>

						</div>
					</div>
					<!-- end col -->
				</div>
			</div>
		</div>
	</div>
	<!-- container -->
</div>
<!-- content -->
@endsection
