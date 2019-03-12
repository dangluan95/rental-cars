<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
	content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('favicon.png')}}">
<!-- App title -->
<title>Rental[Cars] - Management Cars</title>

<!-- DataTables -->
<link href="{{asset('assets/backend/plugins/datatables/jquery.dataTables.min.css')}}"
	rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/plugins/datatables/buttons.bootstrap.min.css')}}"
	rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/plugins/datatables/dataTables.colVis.css')}}"
	rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/plugins/datatables/dataTables.bootstrap.min.css')}}"
	rel="stylesheet" type="text/css" />
	
<!-- App css -->
<link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet"
	type="text/css" />
<link href="{{asset('assets/backend/css/core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/css/components.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/css/icons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/css/pages.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/css/menu.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/backend/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('assets/backend/plugins/switchery/switchery.min.css')}}">
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="{{asset('assets/backend/js/modernizr.min.js')}}"></script>

</head>

<body class="fixed-left">

	<!-- Begin page -->
	<div id="wrapper">
	@include('layouts.backend.partials.header')
	@include('layouts.backend.partials.sidebar')
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-xs-12">
							<div class="page-title-box">
								<h4 class="page-title">Management Cars</h4>
								<ol class="breadcrumb p-0 m-0">
									<li><a href="{{route('admin.dashboard')}}">Rental Cars</a></li>
									<li>Category & Product</li>
									<li>Cars</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card-box table-responsive">
								<a  href="{{route('admin.car.create')}}"
                					class="btn btn-sm  btn-success"> + Add Car </a>
                				<hr />
								
								<table id="datatable-buttons"
									class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Image</th>
											<th>Manufacter</th>
											<th>Price</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										@foreach($cars as $car)
    										<tr>
    											<td>{{$car->id}}</td>
    											<td>{{$car->name}}</td>
    											<td>
    												<img src="{{asset('storage/car/'.$car->image)}}" alt="car" />
    											</td>
    											<td>
    												{{$car->manufacter_id}}
    											</td>
    											<td>
    												{{number_format($car->price, 0, '', ',')}}
    											</td>
    											<td>
    												<a href="{{route(
    												'admin.car.edit'
    												,$car->id)}}"
    												type="button" class="btn 
    												btn-sm btn-warning">
    													<i class="fa fa-pencil">
    													</i>&nbsp;Edit
    												</a>
    												&nbsp;
    												<button type="button"
    												class="btn btn-sm 
    												btn-danger"
    												onclick="deleteCar(
        												{{$car->id}})">
    													<i class="fa fa-trash">
    													</i>&nbsp;Delete
    												</button>
    												<form id="delete-form-{{
    													  $car->id}}"
        												action="{{route(
        												'admin.car.destroy'
        												,$car->id)}}"
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
			@include('layouts.backend.partials.footer')
		</div>
	</div>

	<script>
            var resizefunc = [];
        </script>

	<!-- jQuery  -->
	<script src="{{asset('assets/backend/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/detect.js')}}"></script>
	<script src="{{asset('assets/backend/js/fastclick.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.blockUI.js')}}"></script>
	<script src="{{asset('assets/backend/js/waves.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.scrollTo.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/switchery/switchery.min.js')}}"></script>

	<script src="{{asset('assets/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/dataTables.bootstrap.js')}}"></script>

	<script src="{{asset('assets/backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/jszip.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/pdfmake.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/vfs_fonts.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/buttons.html5.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/buttons.print.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/dataTables.colVis.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/dataTables.fixedColumns.min.js')}}"></script>

	<!-- init -->
	<script src="{{asset('assets/backend/pages/jquery.datatables.init.js')}}"></script>

	<!-- App js -->
	<script src="{{asset('assets/backend/js/jquery.core.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.app.js')}}"></script>

	<script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
        });
        TableManageButtons.init();
    </script>
    <!-- Custome -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
    <script 
		src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js">
    </script>
    {!! Toastr::message() !!}
    <script>
		@if($errors->any())
			@foreach($errors->all() as $error)
				toastr.error('{{$error}}','Error',{
					closeButton: true,
					progressBar: true
				});
			@endforeach
		@endif
	</script>
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
</body>
</html>