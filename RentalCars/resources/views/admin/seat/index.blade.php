@extends('layouts.backend.common')
@section('title','Management Number Of Seats') @section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Management Number Of Seats</h4>
					<ol class="breadcrumb p-0 m-0">
						<li>
							<a href="{{route('admin.dashboard')}}">
								Renatal Cars
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
			<div class="col-sm-12">
				<div class="card-box">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
    						<div class="demo-box m-t-20">
    							<a href="{{route('admin.seat.create')}}"
    							class="btn btn-sm  btn-success">
    								+ Add Number Of Seats
    							</a>
    							<hr />
    							<div class="table-responsive">
    								<table 
    								class="table m-0 table-colored 
    								table-custom">
    									<thead>
    										<tr>
    											<th style="width: 50px">ID</th>
    											<th style="width: 250px">
    												Number Of Seats
    											</th>
    											<th style="width: 200px">
    												Created time
    											</th>
    											<th>Action</th>
    										</tr>
    									</thead>
    									<tbody>
    										@foreach($seats as $seat)
    										<tr>
    											<td>{{$seat->id}}</td>
    											<td>
    												{{$seat->number_of_seats}}
    												seats
    											</td>
    											<td>
    												{{$seat->created_at}}
    											</td>
    											<td>
    												<a href="{{route(
    												'admin.seat.edit'
    												,$seat->id)}}" 
    												type="button" class="btn 
    												btn-sm btn-warning">
    													<i 
    													class="fa fa-pencil">
    													</i>&nbsp;Edit
    												</a>
    												&nbsp;
    												<button type="button"
    												class="btn btn-sm 
    												btn-danger"
    												onclick="deleteSeat(
        												{{$seat->id}}
    												)">
    													<i class="fa fa-trash">
    													</i>&nbsp;Delete
    												</button>
    												<form id="delete-form-{{
    													  $seat->id}}"
        												action="{{route(
        												'admin.seat.destroy'
        												,$seat->id)}}"
    													method="post"
    													style="display: none;">
                										@csrf
                										@method('DELETE')
													</form>
    											</td>
    										</tr>
    										@endforeach
    									</tbody>
    								</table>
    							</div>
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
@push('js')
<script type="text/javascript">
	function deleteSeat(id) {
		swal({
			title: "Are you sure?",
			text: 
			"Once deleted, you will not be able to recover this number of seats!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
			.then((willDelete) => {
			  if (willDelete) {
				event.preventDefault();
				document.getElementById('delete-form-'+id).submit();
			    swal("Success! Your number of seats has been deleted!", {
			      icon: "success",
			    });
			  } else {
			    swal("Your number of seats is safe!");
			  }
		});
	}
</script>
@endpush