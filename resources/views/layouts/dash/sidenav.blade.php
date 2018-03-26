<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  @include('components.nav-link', [
    'title' => 'Dashboard', 
    'icon' => 'fa-dashboard', 
    'link' => route('home')]
  )
@include('claro.admin.admin-dash');
</ul>