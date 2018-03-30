<div class="card" id="app">
  <div class="card-header">
    <span class="fa fa-dashboard"></span>
    Solicitudes De Servicio
  </div>
  <div class="card-body">
    <solicitudes @detallar="detallar" @habilitar="habilitar"></solicitudes>
  </div>
  <modal ref="detalle" title="Detalles" hide-footer>
    <detalle-solicitud v-if="cliente" :cliente="cliente"></detalle-solicitud>
  </modal>
  <modal ref="cita" title="Asignar Cita" hide-footer>
    <cita-form v-if="cliente" :cliente="cliente"></cita-form>
  </modal>
</div>

@push('scripts')
  <script src="{{ asset('dist/operador.js') }}"></script>
@endpush