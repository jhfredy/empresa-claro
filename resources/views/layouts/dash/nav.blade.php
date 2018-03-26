<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Claro</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      {{--  SideNav  --}}
      @include('layouts.dash.sidenav')
      {{--  SideNav Toggler  --}}
      @include('layouts.dash.sidenav-toggler')
      <ul class="navbar-nav ml-auto">
        {{--  Mensajes  --}}
        @include('layouts.dash.mensajes')

        {{--  Notificaciones  --}}
        @include('layouts.dash.notificaciones')

        {{--  Busqueda  --}}
        @include('layouts.dash.busqueda')

        {{--  Logout  --}}
        @include('layouts.dash.logout')
      </ul>
    </div>
  </nav>