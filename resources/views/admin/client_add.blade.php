@extends('layouts.app')

@section('content')

<div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('manage-client')}}">Clients</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Add Client</a></li>
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
	                			<h4>Client Add Form</h4>
	                		</div>
	                		<div class="col-xs-6 text-right">
	                			<a href="{{route('manage-client')}}" class="btn btn-primary">All Clients</a>
	                		</div>
	                	</div>
	                    <div class="row">
	                        <div class="col-md-12">
<form class="form-horizontal" method="POST" action="{{route('save-client')}}">
	@csrf
    <div class="form-group">
        <label for="service_id" class="col-sm-3 control-label">Service</label>
        <div class="col-sm-9">
          <select name="service" id="service_id" class="form-control">
            <option value=""> Select Service </option>
            @foreach($service as $row)
            <option value="{{$row->title}}"> {{$row->title}} </option>
            @endforeach
          </select>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
            <input type="text" name="name" class="form-control" id="name" placeholder="Client Name" value="{{old('name')}}">
            @error('name')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="mobile" class="col-sm-3 control-label">Mobile</label>
        <div class="col-sm-9">
            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Client Mobile" value="{{old('mobile')}}">
            @error('mobile')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Create</button>
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
