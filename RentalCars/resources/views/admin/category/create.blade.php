@extends('layouts.backend.common')
@push('css')
<link href="{{asset('assets/backend/css/bootstrap-select.css')}}" 
	  rel="stylesheet" />
<style>
img{
  max-width:402px;
}
</style>
@endpush
@section('title','Add Category')
@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Add Post</h4>
					<ol class="breadcrumb p-0 m-0">
						<li>
							<a href="{{route('admin.dashboard')}}">
								Reantal Cars
							</a>
						</li>
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
				<div class="card-box">
					<div class="row">
						<div class="p-20">
							<form action="{{route('admin.category.store')}}"
								role="form" method="post">
								@csrf
								<div class="form-group">
									<label>
										Category Name
										<span class="text-danger">*</span>
									</label>
									<input type="text" name="name"
										placeholder="Enter category name"
										class="form-control"
										id="categoryName">
								</div>

								<div class="form-group text-right m-b-0">
									<button class="btn btn-success 
									waves-effect waves-light" type="submit">
									Submit</button>
									<a type="button" 
									href="{{route('admin.manufacter.index')}}"
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
@endsection
@push('js')
<script src="{{asset('assets/backend/js/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<script
	src="{{asset('assets/backend/plugins/bootstrap-filestyle/js/
	bootstrap-filestyle.min.js')}}" type="text/javascript">
</script>
@endpush