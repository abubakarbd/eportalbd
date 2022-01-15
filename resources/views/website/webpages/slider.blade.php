<div data-aos="zoom-in"
data-aos-duration="500"
 class="container bg-my">
  <div class="row text-center justify-content-center">
    <div class="col-md-12">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 
  <ol class="carousel-indicators">
    @foreach($sliders as $slider)
    @if($loop->first==1)
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    @else
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->iteration-1}}"></li>
    @endif

    @endforeach
  </ol>

  <div class="carousel-inner">
   
       @foreach($sliders as $slider)

       @if($loop->first==1)
    <div class="carousel-item active">
        <div class="card text-center">
        <div class="card-body p-0">
          <div class="">
            <img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="New York" width="100%" height="250px;">
            <div class="carousel-caption bg-slider">
              <h3 class="text-white font-weight-bold">{{ $slider->title }}</h3>
              <p class="text-white font-weight-bold">{{ $slider->sub_title }}</p>
            </div>   
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="carousel-item">
        <div class="card text-center">
        <div class="card-body p-0">
          <div class="">
            <img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="New York" width="100%" height="250px;">
            <div class="carousel-caption bg-slider">
              <h3 class="text-white font-weight-bold">{{ $slider->title }}</h3>
              <p class="text-white font-weight-bold">{{ $slider->sub_title }}</p>
            </div>   
          </div>
        </div>
      </div>
    </div>
    @endif
@endforeach


  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
      </div>
    </div>
  </div>
</div>
