@extends('layouts.backend.common')
@section('title','Edit Category')
@section('content')
<!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Category</h4>
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
            <div class="col-xs-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="p-20">
                                <form action="{{route(
                                'admin.category.update', $category->id)}}"
                                      role="form" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>
                                            Category Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="name"
                                               value="{{$category->name}}"
                                               class="form-control"
                                               id="manufacterName">
                                    </div>

                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-success
									waves-effect waves-light" type="submit">
                                            Submit</button>
                                        <a type="button"
                                           href="{{route(
                                           'admin.category.index')}}"
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