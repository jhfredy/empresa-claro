<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container">
    <img src="{{asset('img/logo-claro.svg')}}" class="img-responsive" style="width:5em">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Inicio de sesión</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>