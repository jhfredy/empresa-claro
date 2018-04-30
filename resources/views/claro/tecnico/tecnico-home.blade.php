<div class="card" id="app">
    <div class="card-header">
      <span class="fa fa-dashboard"></span>
      Solicitudes De Servicio
    </div>
    <div class="card-body">
        <tabla-citas :citas="citas"></tabla-citas>
    </div>
  </div>
  
  @push('scripts')
    <script src="{{ asset('dist/tecnico.js') }}"></script>
  @endpush