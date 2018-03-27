<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('layouts.auth.head')

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">@yield('header')</div>
      <div class="card-body">
        @yield('body')
      </div>
    </div>
  </div>
  @include('layouts.auth.scripts')
</body>

</html>