@php
    $role = Auth::user()->rol;
@endphp

<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  @include('components.nav-link', [
    'title' => 'Dashboard', 
    'icon' => 'fa-dashboard', 
    'link' => route('home')]
  )
  @includeWhen($role == 'admin', 'claro.admin.admin-dash')
  @includeWhen($role == 'operador', 'claro.operador.operador-dash')
  @includeWhen($role == 'tecnico', 'claro.tecnico.tecnico-dash')
</ul>