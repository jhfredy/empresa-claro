<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" >
    <title>Claro</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    {{-- Navigation --}}
    @include('layouts.index.nav')

    {{--  Header  --}}
    @include('layouts.index.header')

    @yield('body')
    

    <!-- Footer -->
    @include('layouts.index.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dist/manifest.js') }}"></script>
    <script src="{{ asset('dist/vendor.js') }}"></script>
    @stack('scripts')

  </body>

</html>