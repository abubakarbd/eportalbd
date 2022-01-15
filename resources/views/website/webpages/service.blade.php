<div
data-aos="zoom-in"
data-aos-duration="500" class="container bg-my mt-1 pb-3" id="product">
  <h2 class="text-center text-white p-3">সেবা সূহ</h2>
  
  <div class="row text-center">
    @foreach($service as $row)
        <div
    data-aos="flip-left" data-aos-duration="400" class="col-md-4 p-scroll mb-3">
      <div class="card">
        <img class="card-img-top" src="{{ asset('uploads/'.$row->image) }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $row->title }}</h5>
          <p class="card-text">{{ $row->sub_title }}</p>
             <!-- Button trigger modal -->
            <p class="btn btn-primary">
              <a class="text-white" href="{{route('service-client', $row->title)}}">আপনার তথ্য দিন</a>
            </p>
                        
        </div>
      </div>
    </div>
      @endforeach
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" method="POST" action="{{route('save-client')}}">
           @csrf
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name" name="name" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Mobile</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Mobile" name="mobile" value="{{old('mobile')}}">
          </div>
          <input type="hidden" name="service" value="a">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Sent</button>
      </div>
      </form>
    </div>
  </div>
</div>
