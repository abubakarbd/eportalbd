<div
data-aos="zoom-in"
data-aos-duration="500" class="container bg-my mt-1 pb-3" id="product">
  <h2 class="text-center text-white p-3">তথ্য ফরম</h2>
  <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
      <div class="card">
        
        <div class="card-body">
         @if(Session('cmsg'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{Session('cmsg')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
         @endif       
                  @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{$error}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>                
                @endforeach
              @endif
                
           <form class="form-horizontal" method="POST" action="{{route('save-client')}}">
           @csrf
          <div class="form-group">
            <label for="formGroupExampleInput">নাম</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="আপনার নাম লিখুন" name="name" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">মোবাইল</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="আপনার মোবাইর নাম্বার লিখুন" name="mobile" value="{{old('mobile')}}">
          </div>
          <input type="hidden" name="service" value="{{$title}}">
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">আপনার তথ্য জমা দিন</button>
      </div>
      </form>               
        </div>
      </div>
    </div>

  

          
  </div>
</div>

