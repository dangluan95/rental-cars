@extends('layouts.backend.common')
@push('css')
<!-- DataTables -->
<link href="{{asset('assets/backend/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/backend/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/backend/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/backend/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/backend/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/backend/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/backend/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/backend/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section('title','Management Categories')
@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Management Categories</h4>
					<ol class="breadcrumb p-0 m-0">
						<li><a href="{{route('admin.dashboard')}}">Renatal Cars</a></li>
						<li>Posts</li>
						<li>Categories</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- end row -->

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="card-box table-responsive">
					<a  href="{{route('admin.category.create')}}"
						class="btn btn-sm  btn-success"> + Add Category </a>
					<hr />

					<table id="datatable-buttons"
						class="table table-striped table-bordered">
						<thead>
							<tr>
								<th style="width: 40px">ID</th>
								<th style="width: 225px">Name</th>
								<th>Created Time</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
								<tr>
									<td>{{$category->id}}</td>
									<td>{{$category->name}}</td>
									<td>
										{{$category->created_at}}
									</td>
									<td>
										<a href="{{route(
										'admin.category.edit'
										,$category->id)}}"
										type="button" class="btn 
										btn-sm btn-warning">
											<i class="fa fa-pencil">
											</i>&nbsp;Edit
										</a>
										&nbsp;
										<button type="button"
										class="btn btn-sm 
										btn-danger"
										onclick="deleteCategory(
											{{$category->id}}
										)">
											<i class="fa fa-trash">
											</i>&nbsp;Delete
										</button>
										<form id="delete-form-{{
											  $category->id}}"
											action="{{route(
											'admin.category.destroy'
											,$category->id)}}"
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
	<!-- container -->
</div>
<!-- content -->
@endsection
@push('js')
<script src="{{asset('assets/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/dataTables.bootstrap.js')}}"></script>

<script src="{{asset('assets/backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/dataTables.colVis.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables/dataTables.fixedColumns.min.js')}}"></script>

<!-- init -->
<script src="{{asset('assets/pages/jquery.datatables.init.js')}}"></script>

<script type="text/javascript">
	function deleteCategory(id) {
		swal({
			  title: "Are you sure?",
			  text: "Once deleted, you will not be able to recover this Category!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
				event.preventDefault();
				document.getElementById('delete-form-'+id).submit();
			    swal("Success! Your Category has been deleted!", {
			      icon: "success",
			    });
			  } else {
			    swal("Your Category is safe!");
			  }
		});
	}
</script>
@endpush