<div class="card" id="app">
  <div class="card-header">
    <span class="fa fa-dashboard"></span>
    Solicitudes De Servicio
  </div>
  <div class="card-body">
    <solicitudes></solicitudes>
  </div>

</div>

@push('scripts')
  <script src="{{ asset('dist/operador.js') }}"></script>
@endpush