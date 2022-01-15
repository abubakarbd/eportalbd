@extends('layouts.app')

@section('content')

<div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Notice</a></li>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Add Notice</a></li>
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
	                			<h4>Notice Add Form</h4>
	                		</div>
	                		<div class="col-xs-6 text-right">
	                			<a href="{{route('manage-notice')}}" class="btn btn-primary">All Notice</a>
	                		</div>
	                	</div>
	                    <div class="row">
	                        <div class="col-md-12">
	                            <form class="form-horizontal" method="POST" action="{{route('save-notice')}}">
	                            	@csrf
	                                <div class="form-group">
	                                    <label for="title" class="col-sm-3 control-label">Title</label>
	                                    <div class="col-sm-9">
	                                        <input type="text" name="title" class="form-control" id="title" placeholder="Brand Name" value="{{old('title')}}">
	                                        @error('title')
	                                        <strong class="text-danger">{{$message}}</strong>
	                                        @enderror
	                                    </div>
	                                </div>
	                                	<div class="form-group">
                                            <label for="textareaMaxLength" class="col-sm-3 control-label">Notice</label>
                                            <div class="col-sm-9">
                                            <textarea name="notice" class="form-control" rows="3" id="textareaMaxLength" placeholder="Write a Notice" maxlength="5000"></textarea>
                                            <span class="help-block"><i class="fa fa-info-circle mr-xs"></i>Max characters set to <span class="code">5000</span></span>
                                        </div>
                                        </div>
	                                <div class="form-group">
	                                    <div class="col-sm-offset-3 col-sm-9">
	                                        <button type="submit" class="btn btn-primary">Save Notice</button>
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