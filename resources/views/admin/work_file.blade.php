@extends('layouts.app') @section('content')

<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('list-work')}}">All Work</a></li>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Work</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            @include('includes.message')
            <div class="panel b-primary bt-md">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>Work Form</h4>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{route('list-work')}}" class="btn btn-primary">All Works</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                              <iframe src ="{{ asset('/') }}uploads/files/{{ $file }}" width="1500px" height="800px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
