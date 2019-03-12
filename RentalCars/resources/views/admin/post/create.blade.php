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
@section('title','Add Post')
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
						<li>Category & Product</li>
						<li>Posts</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- end row -->

		<div class="row">
			<div class="col-md-12">
				<div class="card-box">
					<div class="row">
							
							<div class="p-20">
								<ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#en" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                                            <span class="hidden-xs">English Writing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#vi" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                                            <span class="hidden-xs">Vietnamese Writing</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                	<div class="tab-pane active" id="en">
                                    	<form role="form" method="post"
                							action="{{route('admin.car.store')}}"
                							enctype="multipart/form-data">
                							@csrf
                							<div class="row">
                								<div class="col-md-2">
                									<label>Manufacter</label>
                								</div>
                								<div class="col-md-10">
                									<select name="manufacter"
                										class="selectpicker"
                										data-live-search="true"
                										data-live-search-style=
                										"begins"
                										title="Please select
                										a manufacter">
                										@foreach($manufacters as
                										$manufacter)
                										<option value=
                										"{{$manufacter->id}}">
                											{{$manufacter->name}}
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
                									<input class="form-control"
                									id="name" 
                									name="name" type="text" 
                									placeholder="Enter car name"
                									value="{{ old('name') }}">
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2">
                									<label>Image</label>
                								</div>
                								<div class="col-md-10">
                									<div class="form-group">
                										<div class="col-md-6">
                                                            <input type="file"
                                                            name="image"
                                                            class="filestyle"
                                                            accept="image/*"
                                                            data-placeholder=
                                                            "No file"
                                                            onchange=
                                                            "readURL(this);"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <img id="blah"
                                                        alt="your image"
                                                        src="{{asset
                                                        ('assets/default-image.png')
                                                        }}"/>
                                                    </div>
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2">
                									<label>Number Of Seats</label>
                								</div>
                								<div class="col-md-10">
                									<select name="seat"
                									class="selectpicker"
                										data-live-search="true"
                										data-live-search-style=
                										"begins"
                										title="Please select
                										number of seats">
                									@foreach(
                									$number_of_seats as $seat)
            										<option value="{{$seat->id}}">
            											{{$seat->number_of_seats}}
            											seats
            										</option>
                									@endforeach
                									</select>
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2">
                									<label>Price</label>
                								</div>
                								<div class="col-md-10">
                									<input type="number"
                									name="price"
                									class="form-control"
                									value="{{ old('price') }}"/>
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2">
                									<label>Description</label>
                								</div>
                								<div class="col-md-10">
                									<textarea name="description"
                									class="ckeditor"></textarea>
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2"></div>
                								<div class="form-group
                								text-left m-b-0">
                									&nbsp;&nbsp;
                									<button
                									class="btn btn-success 
                									waves-effect waves-light"
                									type="submit">
                									Submit</button>
                									<a type="button" 
                									href="{{route(
                									'admin.car.index')}}"
                									class="btn btn-default
                									waves-effect 
                									m-l-5">Cancel</a>
                								</div>
                							</div>
                						</form>
                                    </div>
                                    <div class="tab-pane" id="vi">
                                    	<form role="form" method="post"
                							action="{{route('admin.car.store')}}"
                							enctype="multipart/form-data">
                							@csrf
                							<div class="row">
                								<div class="col-md-2">
                									<label>Nhà sản xuất</label>
                								</div>
                								<div class="col-md-10">
                									<select name="manufacter"
                										class="selectpicker"
                										data-live-search="true"
                										data-live-search-style=
                										"begins"
                										title="Chọn nhà sản xuất">
                										@foreach($manufacters as
                										$manufacter)
                										<option value=
                										"{{$manufacter->id}}">
                											{{$manufacter->name}}
                										</option>
                										@endforeach
                									</select>
                								</div>
                							</div>
                							<br />
                							<div class="row">
                								<div class="col-md-2">
                									<label>Tên xe</label>
                								</div>
                								<div class="col-md-10">
                									<input class="form-control"
                									id="name" 
                									name="name" type="text" 
                									placeholder="Nhập vào tên xe"
                									value="{{ old('name') }}">
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2">
                									<label>Ảnh</label>
                								</div>
                								<div class="col-md-10">
                									<div class="form-group">
                										<div class="col-md-6">
                                                            <input type="file"
                                                            name="image"
                                                            class="filestyle"
                                                            accept="image/*"
                                                            data-placeholder=
                                                            "Chưa có file được chọn"
                                                            onchange=
                                                            "readURL(this);"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <img id="blah"
                                                        alt="your image"
                                                        src="{{asset
                                                        ('assets/default-image.png')
                                                        }}"/>
                                                    </div>
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2">
                									<label>Số ghế ngồi</label>
                								</div>
                								<div class="col-md-10">
                									<select name="seat"
                									class="selectpicker"
                										data-live-search="true"
                										data-live-search-style=
                										"begins"
                										title="Chọn số lượng ghế ngồi">
                									@foreach(
                									$number_of_seats as $seat)
            										<option value="{{$seat->id}}">
            											{{$seat->number_of_seats}}
            											seats
            										</option>
                									@endforeach
                									</select>
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2">
                									<label>Giá xe</label>
                								</div>
                								<div class="col-md-10">
                									<input type="number"
                									name="price"
                									class="form-control"
                									value="{{ old('price') }}"/>
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2">
                									<label>Mô tả xe</label>
                								</div>
                								<div class="col-md-10">
                									<textarea name="description"
                									class="ckeditor"></textarea>
                								</div>
                							</div>
                							<div class="row"
                							style="margin-top: 15px">
                								<div class="col-md-2"></div>
                								<div class="form-group
                								text-left m-b-0">
                									&nbsp;&nbsp;
                									<button
                									class="btn btn-success 
                									waves-effect waves-light"
                									type="submit">
                									Submit</button>
                									<a type="button" 
                									href="{{route(
                									'admin.car.index')}}"
                									class="btn btn-default
                									waves-effect 
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