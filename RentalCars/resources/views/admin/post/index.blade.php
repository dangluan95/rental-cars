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
@section('title','Management Posts')
@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Management Posts</h4>
					<ol class="breadcrumb p-0 m-0">
						<li><a href="{{route('admin.dashboard')}}">Renatal Cars</a></li>
						<li>Posts</li>
						<li>Collection</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- end row -->

		<div class="row">
			<div class="col-sm-12">
				<div class="card-box table-responsive">
					<a  href="{{route('admin.post.create')}}"
						class="btn btn-sm  btn-success"> + Add Post </a>
					<hr />

					<table id="datatable-buttons"
						class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Image</th>
								<th>Manufacter</th>
								<th>Created time</th>
								<th>Action</th>
							</tr>
						</thead>


						<tbody>
							
							
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
	function deleteCar(id) {
		swal({
			  title: "Are you sure?",
			  text: "Once deleted, you will not be able to recover this car!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
				event.preventDefault();
				document.getElementById('delete-form-'+id).submit();
			    swal("Success! Your car has been deleted!", {
			      icon: "success",
			    });
			  } else {
			    swal("Your car is safe!");
			  }
		});
	}
</script>
@endpush