<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{asset('img/logo-claro.svg')}}" class="img-responsive" style="width:5em">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      {{--  SideNav  --}}
      @include('layouts.dash.sidenav')
      {{--  SideNav Toggler  --}}
      @include('layouts.dash.sidenav-toggler')
      {{-- Usuario Logueado --}}
      @include('layouts.dash.current-user')
      <ul class="navbar-nav ml-auto">
        {{--  Mensajes  --}}
        {{-- @include('layouts.dash.mensajes') --}}

        {{--  Notificaciones  --}}
        {{-- @include('layouts.dash.notificaciones') --}}

        {{--  Busqueda  --}}
        {{-- @include('layouts.dash.busqueda') --}}

        
        {{--  Logout  --}}
        @include('layouts.dash.logout')
      </ul>
    </div>
  </nav>