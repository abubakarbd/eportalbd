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
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="title" class="control-label">Name</label>
                                            <input type="text"  class="form-control"  value="{{ $work->name }}" readonly/>
                                      </div>
                                      <div class="form-group">
                                        <label for="title" class="control-label">Mobile</label>
                                            <input type="text" class="form-control"  value="{{$work->contact_numbar}}" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Company Name</label>
                                            <input type="text" class="form-control" value="{{$work->company_name}}" readonly/>
                                      </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Company Address</label>
                                            <input type="text" class="form-control" value="{{$work->company_address}}" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Name of Owner</label>
                                            <input type="text" class="form-control" value="{{$work->name_of_owner}}" readonly/>

                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="title" class="control-label">Gmail Address</label>
                                            <input type="gmail" class="form-control" value="{{$work->gmail}}" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Gmail Password</label>
                                            <input type="text"  class="form-control" value="{{$work->gmail_password}}" readonly/>

                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Note</label>
                                            <input type="text" class="form-control" value="{{ $work->note }}" readonly/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="title" class="control-label">National ID</label>
                                          <input type="text" class="form-control" value="{{$work->national_id}}" readonly/>
                                  </div>
                                  <div class="form-group">
                                      <label for="title" class="control-label">Tin Certificate</label>
                                          <input type="text" class="form-control" value="{{$work->tin_certificate}}" readonly/>
                                  </div>
                                  <div class="form-group">
                                      <label for="title" class="control-label">Trade license No</label>
                                          <input type="text" class="form-control" value="{{$work->trade_license_no}}" readonly/>

                                  </div>
                                  <div class="form-group">
                                      <label for="title" class="control-label">Trade license issue Date</label>
                                          <input type="text" class="form-control" value="{{$work->trade_license_issue_date}}" readonly/>
                                  </div>
                                  <div class="form-group">
                                      <label for="title" class="control-label">Bank Account Numbar</label>
                                          <input type="text" class="form-control" value="{{$work->bank_account_numbar}}" readonly/>
                                  </div>
                                      <div class="form-group">
                                          <label for="title" class="control-label">Bank Account Name</label>
                                              <input type="text" class="form-control" value="{{$work->bank_account_name}}" readonly/>
                                      </div>

                                      <div class="form-group">
                                          <label for="title" class="control-label">Bank Name</label>
                                              <input type="text" class="form-control" value="{{ $work->bank_name }}" readonly/>
                                      </div>
                                      <div class="form-group">
                                          <label for="title" class="control-label">Bank Branch Name</label>
                                              <input type="text" class="form-control" value="{{ $work->bank_branch_name }}" readonly/>
                                      </div>


                                      <div class="form-group">
                                          <label for="title" class="control-label">Submission ID 1</label>
                                              <input type="text" class="form-control" value="{{ $work->submission_id1 }}" readonly/>
                                      </div>
                                      <div class="form-group">
                                          <label for="title" class="control-label">Submission ID 2</label>
                                              <input type="text" class="form-control" value="{{ $work->submission_id2 }}" readonly/>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="image1" class="control-label">File 1</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images1 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image2" class="control-label">File 2</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images2 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image3" class="control-label">File 3</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images3 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image4" class="control-label">File 4</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images4 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image5" class="control-label">File 5</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images5 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image6" class="control-label">File 6</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images6 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image7" class="control-label">File 7</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images7 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image8" class="control-label">File 8</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images8 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image9" class="control-label">File 9</label>
                                        <a target="_blank" href="#"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images9 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="pdf1" class="control-label">File 10</label>
                                        <a target="_blank" href="{{ url('work/view/file/'.$work->id.'/'.'images7' ) }}"><img width="100" height="100" src="{{ asset('/') }}uploads/files/{{ $work->images10 }}" alt=""></a>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="{{ route('list-work') }}" class="btn btn-primary">Back</a>
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
