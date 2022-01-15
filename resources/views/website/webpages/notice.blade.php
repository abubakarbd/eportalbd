
<div
data-aos="zoom-in"
data-aos-duration="500" class="container bg-my mt-1 pb-3" id="product">
  <h2 class="text-center text-white p-3">নোটিশ বোর্ড</h2>
  
        
      <div class="card">
        
        <div class="card-body">
          <div class="accordion" id="accordionExample">

@foreach($notice as $row)
    @if($loop->first==1)
  <div class="card">
    <div class="card-header" id="">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#ab{{$loop->first}}" aria-expanded="true" aria-controls="">
          {{$row->title}}
        </button>
      </h2>
    </div>

    <div id="ab{{$loop->first}}" class="collapse show" aria-labelledby="ab{{$loop->first}}" data-parent="#accordionExample">
      <div class="card-body">
        {{$row->notice}}
      </div>
    </div>
  </div>

@else
  <div class="card">
    <div class="card-header" id="">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#a{{$row->id}}"  aria-controls="">
          {{$row->title}}
        </button>
      </h2>
    </div>
    <div id="a{{$row->id}}" class="collapse" aria-labelledby="" data-parent="#accordionExample">
      <div class="card-body">
        {{$row->notice}}
      </div>
    </div>
  </div>
@endif

    @endforeach

</div>
        </div>
      </div>
</div>
