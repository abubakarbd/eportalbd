<div
data-aos="zoom-in"
data-aos-duration="500" class="container bg-my mt-5" id="eservice">
<div class="card mt-2">
  <div class="card-header">
    <h3 class="text-info">সকল-ই-সেবা</h3>
  </div>
  <div class="card-body">
      <div class="row text-center">
        @foreach($service as $service)
        <div class="col-md-3">
          <a href="{{route('service',$service->id)}}" class="screlb"> 
              <div class="card-body screlf">
              <img class="mb-1" width="80" height="80" src="{{ asset('uploads/'.$service->image) }}">
              <p class="text-info mb-0"> {{ $service->title }}</p>
            </div>
          </a>
        </div>
    @endforeach

      </div>
  </div>
</div>
</div>