@extends('layouts.backend.common')
@section('title','Management Manufacters')
@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Management Manufacters</h4>
					<ol class="breadcrumb p-0 m-0">
						<li>
							<a href="{{route('admin.dashboard')}}">
								Renatal Cars
							</a>
						</li>
						<li>Category & Product</li>
						<li>Manufacters</li>
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
    							<a href="{{route('admin.manufacter.create')}}"
    							class="btn btn-sm  btn-success">
    								+ Add Manufacter
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
    												Name
    											</th>
    											<th style="width: 200px">
    												Created time
    											</th>
    											<th>Action</th>
    										</tr>
    									</thead>
    									<tbody>
    										@foreach($manufacters as $manufacter)
    										<tr>
    											<td>{{$manufacter->id}}</td>
    											<td>{{$manufacter->name}}</td>
    											<td>
    												{{$manufacter->created_at}}
    											</td>
    											<td>
    												<a href="{{route(
    												'admin.manufacter.edit'
    												,$manufacter->id)}}"
    												type="button" class="btn 
    												btn-sm btn-warning">
    													<i class="fa fa-pencil">
    													</i>&nbsp;Edit
    												</a>
    												&nbsp;
    												<button type="button"
    												class="btn btn-sm 
    												btn-danger"
    												onclick="deleteManufacter(
        												{{$manufacter->id}}
    												)">
    													<i class="fa fa-trash">
    													</i>&nbsp;Delete
    												</button>
    												<form id="delete-form-{{
    													  $manufacter->id}}"
        												action="{{route(
        												'admin.manufacter.destroy'
        												,$manufacter->id)}}"
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
	function deleteManufacter(id) {
		swal({
			  title: "Are you sure?",
			  text: "Once deleted, you will not be able to recover this manufacter!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
				event.preventDefault();
				document.getElementById('delete-form-'+id).submit();
			    swal("Success! Your manufacter has been deleted!", {
			      icon: "success",
			    });
			  } else {
			    swal("Your manufacter is safe!");
			  }
		});
	}
</script>
@endpush