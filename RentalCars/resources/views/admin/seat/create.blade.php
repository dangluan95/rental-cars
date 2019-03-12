@extends('layouts.backend.common')
@section('title','Add Number Of Seats')
@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Add Number Of Seats</h4>
					<ol class="breadcrumb p-0 m-0">
						<li>
							<a href="{{route('admin.dashboard')}}">
								Reantal Cars
							</a>
						</li>
						<li>Management</li>
						<li>Number Of Seats</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- end row -->

		<div class="row">
			<div class="col-xs-12">
				<div class="card-box">

					<div class="row">
						<div class="col-md-8 col-md-offset-2">

							<div class="p-20">
								<form action="{{route('admin.seat.store')}}"
									role="form" method="post">
									@csrf
									<div class="form-group">
										<label>
    										Number Of Seats
    										<span class="text-danger">*</span>
										</label>
										<input type="number"
											name="number_of_seats"
											placeholder="Enter number of seats"
											class="form-control"
											id="seatsNumber">
									</div>

									<div class="form-group text-right m-b-0">
										<button class="btn btn-success 
										waves-effect waves-light" type="submit">
										Submit</button>
										<a type="button" 
										href="{{route('admin.seat.index')}}"
										class="btn btn-default waves-effect 
										m-l-5">Cancel</a>
									</div>

								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection