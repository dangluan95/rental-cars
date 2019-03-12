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
@section('title','Edit Car')
@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
					<h4 class="page-title">Edit Car</h4>
					<ol class="breadcrumb p-0 m-0">
						<li>
							<a href="{{route('admin.dashboard')}}">
								Reantal Cars
							</a>
						</li>
						<li>Category & Product</li>
						<li>Cars</li>
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
					
							<div class="p-20">
								<form role="form" method="post"
								action="{{route('admin.car.update',$car->id)}}"
								enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="row">
									<div class="col-md-2">
										<label>Manufacter</label>
									</div>
									<div class="col-md-10">
										<select name="manufacter"
											class="selectpicker"
											data-live-search="true"
											data-live-search-style="begins"
											title="Please select a manufacter">
											@foreach($manufacters as $manufacter)
											<option 
                                            	{{$car->manufacter->id
                                            	== $manufacter->id ?
                                            	'selected' : ''}}
                                            	value="{{ $manufacter->id }}">
                                            	{{ $manufacter->name }}
                                            </option>
											@endforeach
										</select>
									</div>
								</div>
								<br />
								<div class="row">
									<div class="col-md-2">
										<label>Name</label>
									</div>
									<div class="col-md-10">
										<input class="form-control" id="name" 
										name="name" type="text" 
										placeholder="Enter car name"
										value="{{ $car->name }}">
									</div>
								</div>
								<div class="row" style="margin-top: 15px">
									<div class="col-md-2">
										<label>Image</label>
									</div>
									<div class="col-md-10">
										<div class="form-group">
											<div class="col-md-6">
                                                <input type="file" name="image"
                                                class="filestyle" accept="image/*"
                                                data-placeholder="No file"
                                                onchange="readURL(this);"/>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <img id="blah" alt="your image"
                                            src="{{asset(
                                            'storage/car/'.$car->image)}}"/>
                                        </div>
									</div>
								</div>
								<div class="row" style="margin-top: 15px">
									<div class="col-md-2">
										<label>Number Of Seats</label>
									</div>
									<div class="col-md-10">
										<select name="seat" class="selectpicker"
											data-live-search="true"
											data-live-search-style="begins"
											title="Please select number of seats">
										@foreach($number_of_seats as $seat)
											<option
												{{$car->number_of_seat->id
												== $seat->id ? 'selected' : ''}}
												value="{{$seat->id}}">
												{{$seat->number_of_seats}} seats
											</option>
										@endforeach
										</select>
									</div>
								</div>
								<div class="row" style="margin-top: 15px">
									<div class="col-md-2">
										<label>Price</label>
									</div>
									<div class="col-md-10">
										<input type="number" name="price"
										class="form-control"
										value="{{ $car->price }}"/>
									</div>
								</div>
								<div class="row" style="margin-top: 15px">
									<div class="col-md-2">
										<label>Description</label>
									</div>
									<div class="col-md-10">
										<textarea name="description"
										class="ckeditor">{{$car->description}}
										</textarea>
									</div>
								</div>
								<div class="row" style="margin-top: 15px">
									<div class="col-md-2"></div>
									<div class="form-group text-left m-b-0">
										&nbsp;&nbsp;
										<button class="btn btn-success 
										waves-effect waves-light" type="submit">
										Submit</button>
										<a type="button" 
										href="{{route('admin.car.index')}}"
										class="btn btn-default waves-effect 
										m-l-5">Cancel</a>
									</div>
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