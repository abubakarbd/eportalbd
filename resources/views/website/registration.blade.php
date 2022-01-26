@extends('website.webpages.layout')

@section('header')
@includeIf('website.webpages.header')
@endsection
@section('content')
<div
data-aos="zoom-in"
data-aos-duration="500" class="container bg-my mt-1 pb-3" id="product">
  <h2 class="text-center text-white p-3">Information Form</h2>
  
      <div class="card">
        <div class="card-body">
            @include('includes.message')
        <form method="POST" action="{{route('registration.Store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title" class="control-label">Name<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name " value="{{old('company_name')}}" />
                        @error('name')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">Company Name<span class="required">*</span></label>
                        <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name " value="{{old('company_name')}}" />
                        @error('company_name')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">Company Address<span class="required">*</span></label>
                        <input type="text" name="company_address" class="form-control" id="company_address" placeholder="Company Address" value="{{old('company_address')}}" />
                        @error('company_address')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">Name of Owner<span class="required">*</span></label>
                        <input type="text" name="name_of_owner" class="form-control" id="name_of_owner" placeholder="Name of Owner" value="{{old('name_of_owner')}}" />
                        @error('name_of_owner')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">Trade license No<span class="required">*</span></label>
                        <input type="text" name="trade_license_no" class="form-control" id="trade_license_no" placeholder="Trade license No" value="{{old('trade_license_no')}}" />
                        @error('trade_license_no')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">Trade license issue Date<span class="required">*</span></label>
                        <input type="text" name="trade_license_issue_date" class="form-control" id="trade_license_issue_date" placeholder="Trade license issue Date" value="{{old('trade_license_issue_date')}}" />
                        @error('trade_license_issue_date')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="control-label">National ID<span class="required">*</span></label>
                        <input type="text" name="national_id" class="form-control" id="national_id" placeholder="National ID" value="{{old('national_id')}}" />
                        @error('national_id')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">Tin Certificate<span class="required">*</span></label>
                        <input type="text" name="tin_certificate" class="form-control" id="tin_certificate" placeholder="Tin Certificate" value="{{old('tin_certificate')}}" />
                        @error('tin_certificate')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">Bank Account Numbar<span class="required">*</span></label>
                        <input type="text" name="bank_account_numbar" class="form-control" id="bank_account_numbar" placeholder="Bank Account Numbar" value="{{old('bank_account_numbar')}}" />
                        @error('bank_account_numbar')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="title" class="control-label">Contact Numbar<span class="required">*</span></label>
                        <input type="mobile" name="contact_numbar" class="form-control" id="title" placeholder="Contact Numbar" value="{{old('contact_numbar')}}" />
                        @error('contact_numbar')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                  <div class="form-group">
                      <label for="title" class="control-label">Bank Account Name<span class="required">*</span></label>
                          <input type="text" name="bank_account_name" class="form-control" id="bank_account_name" placeholder="Bank Account Name" value="{{old('bank_account_name')}}" />
                          @error('bank_account_name')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                  </div>
                  <div class="form-group">
                      <label for="title" class="control-label">Bank Name<span class="required">*</span></label>
                          <input type="text" name="bank_name" class="form-control" id="bank_name" placeholder="Bank Name" value="{{old('bank_name')}}" />
                          @error('bank_name')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                  </div>
                  <div class="form-group">
                      <label for="title" class="control-label">Bank Branch Name<span class="required">*</span></label>
                          <input type="text" name="bank_branch_name" class="form-control" id="bank_branch_name" placeholder="Bank Branch Name" value="{{old('bank_branch_name')}}" />
                          @error('bank_branch_name')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                  </div>
                  <div class="form-group">
                      <label for="title" class="control-label">Gmail Address<span class="required">*</span></label>
                          <input type="gmail" name="gmail" class="form-control" id="gmail" placeholder="Gmail Address" value="{{old('gmail')}}" />
                          @error('gmail')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                  </div>
                  <div class="form-group">
                      <label for="title" class="control-label">Gmail Password<span class="required">*</span></label>
                          <input type="text" name="gmail_password" class="form-control" id="gmail_password" placeholder="Gmail Password" value="{{old('gmail_password')}}" />
                          @error('gmail_password')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                  </div>
                  <div class="form-group">
                    <label for="contract" class="control-label">Contract</label>
                        <input type="numbar" name="contract" class="form-control" id="contract" placeholder="Contract" value="{{old('contract')}}" />
                        @error('contract')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>
                  <div class="form-group">
                      <label for="title" class="control-label">Note</label>
                          <input type="text" name="note" class="form-control" id="note" placeholder="Note" value="{{old('note')}}" />
                          @error('note')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                  </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="image1" class="control-label">File 1</label>
                    <input type="file" name="images1" class="form-control" id="image1" />
                    @error('image1')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image2" class="control-label">File 2</label>
                    <input type="file" name="images2" class="form-control" id="image2" />
                    @error('image2')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image3" class="control-label">File 3</label>
                    <input type="file" name="images3" class="form-control" id="image3" />
                    @error('image3')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image4" class="control-label">File 4</label>
                    <input type="file" name="images4" class="form-control" id="image4" />
                    @error('image4')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image5" class="control-label">File 5</label>
                    <input type="file" name="images5" class="form-control" id="image5" />
                    @error('image5')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image6" class="control-label">File 6</label>
                    <input type="file" name="images6" class="form-control" id="image6" />
                    @error('image6')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image7" class="control-label">File 7</label>
                    <input type="file" name="images7" class="form-control" id="image7" />
                    @error('image7')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image8" class="control-label">File 8</label>
                    <input type="file" name="images8" class="form-control" id="image8" />
                    @error('image8')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image9" class="control-label">File 9</label>
                    <input type="file" name="images9" class="form-control" id="image9" />
                    @error('image9')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pdf1" class="control-label">File 10</label>
                    <input type="file" name="images10" class="form-control" id="image10" />
                    @error('pdf1')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
</div>

</div>
</div>
</div>
@endsection
@section('footer')
@includeIf('website.webpages.footer')
@endsection