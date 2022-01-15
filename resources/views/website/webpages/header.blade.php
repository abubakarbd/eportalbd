  <div class="container-fluid bg-my">
    <div class="container">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('login')}}">Admin</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container bg-my">
      <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand p-0"><img width="176" height="48" src="{{asset('/')}}website/assat/img/unnamed.png"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
            <a href="{{route('index')}}" class="nav-item nav-link text-info" id="{{request()->is('/') ? 'active' : ''}}"> হোম </a>
            <a href="{{route('notice')}}" class="nav-item nav-link text-info" id="{{request()->is('notice') ? 'active' : ''}}"> নোটিশ </a>
            <a href="{{route('products')}}" class="nav-item nav-link text-info" id="{{request()->is('products') ? 'active' : ''}}"> সকল প্রডাক্ট  </a>
            <!-- <a href="#" class="profile nav-item nav-link text-info"> <img class="rounded-circle" width="32" height="32" src="{{asset('/')}}website/assat/img/avatar.png"> <img width="20" height="20" src="{{asset('/')}}website/assat/img/gold.png"> <span class="badge">0</span> </a> -->
        </div>
    </div>
  </nav>
  </div>