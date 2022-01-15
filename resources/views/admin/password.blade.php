@extends('layouts.app')

@section('content')

<div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Password</a></li>
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
	                			<h4>Password Change Form</h4>
	                		</div>
	                	</div>
                        <hr>
	                    <div class="row">
	                        <div class="col-md-12">
<form class="form-horizontal" method="POST" action="{{route('password-save')}}" enctype="multipart/form-data">
	@csrf
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
            <input type="hidden" name="id" value="2">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" value="{{old('email')}}">
            @error('email')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-3 control-label">New Password</label>
        <div class="col-sm-9">
            <input type="password" name="password" class="form-control" id="password" placeholder="New Password" value="{{old('password')}}">
            @error('password')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>
 
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Change Password</button>
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