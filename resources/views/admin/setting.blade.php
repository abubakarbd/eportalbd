@extends('layouts.app')
@section('content')
  <div class="content">
            <!-- content HEADER -->
            <!-- ========================================================= -->
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a>Setting</a></li>
                    </ul>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row animated fadeInUp">
              <div class="col-sm-12 col-md-6 col-md-offset-3">
                <h4 class="section-subtitle"><b>Setting</b> Update</h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-12">
                              <form action="{{ route('settingUpdate') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $setting->id }}">
                                    <div class="form-group">
                                        <label for="text">Company Name</label>
                                        <input type="text" name="comppany_name" class="form-control" value="{{ $setting->comppany_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Sender Number</label>
                                        <input type="text" name="sms_sender_id" class="form-control" value="{{ $setting->sms_sender_id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">API</label>
                                        <input type="text" name="api_key" class="form-control" value="{{ $setting->api_key }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="text">SMS 1</label>
                                        <input type="text" name="sms1" class="form-control" value="{{ $setting->sms1 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">SMS 2</label>
                                        <input type="text" name="sms2" class="form-control" value="{{ $setting->sms2 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">SMS 3</label>
                                        <input type="text" name="sms3" class="form-control" value="{{ $setting->sms3 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Logo</label>
                                        <input type="file" name="logo" class="form-control">
                                        <img src="{{ asset('uploads') }}/{{ $setting->logo }}" width="60" class="pull-right"/>
                                    </div><br/><hr/>
                                    <div class="form-group">
                                        <label for="text">Banar</label>
                                        <input type="file" name="banar" class="form-control">
                                        <img src="{{ asset('uploads') }}/{{ $setting->banar }}" width="100" class="pull-right"/>
                                    </div><br/><hr/>
                                    <div class="form-group">
                                        <label for="text">Fabicon</label>
                                        <input type="file" name="fabicon" class="form-control">
                                        <img src="{{ asset('uploads') }}/{{ $setting->fabicon }}" width="40" class="pull-right"/>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        </div>
@endsection
