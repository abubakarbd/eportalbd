@extends('layouts.app')

@section('content')

<div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Slider</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Add Slider</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="row">
        	<div class="col-sm-12 col-md-8 col-md-offset-2">
        		@include('includes.message')
	            <div class="panel b-primary bt-md">
	                <div class="panel-content">
	                	<div class="row">
	                		<div class="col-xs-6">
	                			<h4>Slider Add Form</h4>
	                		</div>
	                		<div class="col-xs-6 text-right">
	                			<a href="{{route('manage-slider')}}" class="btn btn-primary">All Slider</a>
	                		</div>
	                	</div>
	                    <div class="row">
	                        <div class="col-md-12">
<form class="form-horizontal" method="POST" action="{{route('save-slider')}}" enctype="multipart/form-data">
	@csrf
    <div class="form-group">
        <label for="image" class="col-sm-3 control-label">Image</label>
        <div class="col-sm-9">
            <input type="file" name="image" class="form-control" id="image">
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
            <input type="text" name="title" class="form-control" id="title" placeholder="Slider Title" value="{{old('title')}}">
            @error('title')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="sub_title" class="col-sm-3 control-label">Sub Title</label>
        <div class="col-sm-9">
            <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Sub Title" value="{{old('sub_title')}}">
            @error('sub_title')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>
 
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Save Slider</button>
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