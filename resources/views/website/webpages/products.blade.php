<div
data-aos="zoom-in"
data-aos-duration="500" class="container bg-my mt-1 p-3" id="product">
  <div class="row text-center">
          
@foreach($products as $row)
          <div
    data-aos="flip-left" data-aos-duration="400" class="col-md-4 p-scroll mb-3">
      <div class="card">
        <img class="card-img-top" src="{{asset('/')}}website/assat/img//bootstrap-4-tutorial.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $row->title }}</h5>
          <hr>
          <p class="card-text">{{ $row->sub_title }}</p>
          <h4 class="text-center">{{ $row->price }} TK</h4>
          <a href="{{ route('single-product', $row->id) }}" class="btn btn-primary">বিস্তারিত</a>
        </div>
      </div>
    </div>
@endforeach



  </div>
</div>