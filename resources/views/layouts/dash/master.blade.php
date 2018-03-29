<!DOCTYPE html>
<html lang="en">

@include('layouts.dash.head')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  @include('layouts.dash.nav')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      {{-- @include('layouts.dash.breadcrump') --}}
      @yield('body')
    </div>
    
    {{--  Footer  --}}
    @include('layouts.dash.footer')

    {{-- Scroll to Top Button --}}
    @include('layouts.dash.scroll-to-top')

    {{--  Logout Modal  --}}
    @include('layouts.dash.logout-modal')

    {{--  Scripts  --}}
    @include('layouts.dash.scripts')
    @stack('scripts')
    
  </div>
</body>

</html>