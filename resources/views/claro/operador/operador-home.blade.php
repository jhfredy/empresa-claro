<div class="card" id="app">
  <div class="card-header">
    <span class="fa fa-dashboard"></span>
    Solicitudes De Servicio
  </div>
  <div class="card-body">
    <solicitudes @detallar="detallar"></solicitudes>
  </div>
  <modal ref="detalle" title="Detalles" hide-footer>
    <detalle-solicitud v-if="cliente" :cliente="cliente"></detalle-solicitud>
  </modal> 
</div>

@push('scripts')
  <script src="{{ asset('dist/operador.js') }}"></script>
@endpush