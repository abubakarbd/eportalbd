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
                            <form method="POST" action="{{route('update-work')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $work->id }}">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="title" class="control-label">Name</label>
                                            <input type="text" class="form-control" value="{{ $work->name }}" readonly/>
                                      </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Company Name</label>
                                            <input type="text" name="company_name" class="form-control" value="{{$work->company_name}}" />
                                      </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Company Address</label>
                                            <input type="text" name="company_address" class="form-control" value="{{$work->company_address}}" />
                                            @error('company_address')
                                            <strong class="text-danger">{{$message}}</strong>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Name of Owner</label>
                                            <input type="text" name="name_of_owner" class="form-control" value="{{$work->name_of_owner}}" />
                                            @error('name_of_owner')
                                            <strong class="text-danger">{{$message}}</strong>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Gmail Address</label>
                                            <input type="gmail" name="gmail" class="form-control" value="{{$work->gmail}}" />
                                            @error('gmail')
                                            <strong class="text-danger">{{$message}}</strong>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Gmail Password</label>
                                            <input type="text" name="gmail_password" class="form-control" value="{{$work->gmail_password}}" />
                                            @error('gmail_password')
                                            <strong class="text-danger">{{$message}}</strong>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Trade license No</label>
                                            <input type="text" name="trade_license_no" class="form-control"  value="{{$work->trade_license_no}}" />
                                            @error('trade_license_no')
                                            <strong class="text-danger">{{$message}}</strong>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Trade license issue Date</label>
                                            <input type="text" name="trade_license_issue_date" class="form-control" value="{{$work->trade_license_issue_date}}" />
                                            @error('trade_license_issue_date')
                                            <strong class="text-danger">{{$message}}</strong>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">National ID</label>
                                            <input type="text" name="national_id" class="form-control" value="{{$work->national_id}}" />
                                            @error('national_id')
                                            <strong class="text-danger">{{$message}}</strong>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="control-label">Tin Certificate</label>
                                            <input type="text" name="tin_certificate" class="form-control" value="{{$work->tin_certificate}}" />
                                            @error('tin_certificate')
                                            <strong class="text-danger">{{$message}}</strong>
                                            @enderror
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title" class="control-label">Mobile</label>
                                            <input type="text" class="form-control" value="{{ $work->contact_numbar }}" readonly/>
                                    </div>
                              
                                  <div class="form-group">
                                      <label for="title" class="control-label">Bank Account Numbar</label>
                                          <input type="text" name="bank_account_numbar" class="form-control" value="{{$work->bank_account_numbar}}" />
                                          @error('bank_account_numbar')
                                          <strong class="text-danger">{{$message}}</strong>
                                          @enderror
                                  </div>
                                      <div class="form-group">
                                          <label for="title" class="control-label">Bank Account Name</label>
                                              <input type="text" name="bank_account_name" class="form-control" value="{{$work->bank_account_name}}" />
                                              @error('bank_account_name')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>

                                      <div class="form-group">
                                          <label for="title" class="control-label">Bank Name</label>
                                              <input type="text" name="bank_name" class="form-control" value="{{ $work->bank_name }}" />
                                              @error('bank_name')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="title" class="control-label">Bank Branch Name</label>
                                              <input type="text" name="bank_branch_name" class="form-control" value="{{ $work->bank_branch_name }}" />
                                              @error('bank_branch_name')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>


                                      <div class="form-group">
                                          <label for="title" class="control-label">Submission ID 1</label>
                                              <input type="text" name="submission_id1" class="form-control" value="{{ $work->submission_id1 }}" />
                                              @error('submission_id1')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="title" class="control-label">Submission ID 2</label>
                                              <input type="text" name="submission_id2" class="form-control" value="{{ $work->submission_id2 }}" />
                                              @error('submission_id2')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="title" class="control-label">Note</label>
                                              <input type="text" name="note" class="form-control" value="{{ $work->note }}" />
                                              @error('note')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="contract" class="control-label">Contract</label>
                                              <input type="numbar" name="contract" class="form-control" value="{{$work->contract}}" />
                                              @error('contract')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="due" class="control-label">Payment</label>
                                              <input type="numbar" name="payment" class="form-control" value="{{ $work->payment }}" />
                                              @error('payment')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="due" class="control-label">Due</label>
                                              <input type="numbar" name="due" class="form-control" value="{{ $work->due }}" />
                                              @error('due')
                                              <strong class="text-danger">{{$message}}</strong>
                                              @enderror
                                      </div>


                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="image1" class="control-label">File 1</label>
                                        <input type="file" name="images1" class="form-control" id="image1" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images1 }}" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                        <label for="image2" class="control-label">File 2</label>
                                        <input type="file" name="images2" class="form-control" id="image2" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images2 }}" alt=""></a>
                                        @error('image2')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image3" class="control-label">File 3</label>
                                        <input type="file" name="images3" class="form-control" id="image3" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images3 }}" alt=""></a>
                                        @error('image3')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image4" class="control-label">File 4</label>
                                        <input type="file" name="images4" class="form-control" id="image4" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images4 }}" alt=""></a>
                                        @error('image4')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image5" class="control-label">File 5</label>
                                        <input type="file" name="images5" class="form-control" id="image5" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images5 }}" alt=""></a>
                                        @error('image5')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image6" class="control-label">File 6</label>
                                        <input type="file" name="images6" class="form-control" id="image6" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images6 }}" alt=""></a>
                                        @error('image6')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image7" class="control-label">File 7</label>
                                        <input type="file" name="images7" class="form-control" id="image7" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images7 }}" alt=""></a>
                                        @error('image7')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image8" class="control-label">File 8</label>
                                        <input type="file" name="images8" class="form-control" id="image8" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images8 }}" alt=""></a>
                                        @error('image8')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image9" class="control-label">File 9</label>
                                        <input type="file" name="images9" class="form-control" id="image9" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images9 }}" alt=""></a>
                                        @error('image9')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image10" class="control-label">File 10</label>
                                        <input type="file" name="images10" class="form-control" id="image10" />
                                        <a target="_blank" href="#"><img width="50" height="50" src="{{ asset('/') }}uploads/files/{{ $work->images10 }}" alt=""></a>
                                        @error('image10')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
