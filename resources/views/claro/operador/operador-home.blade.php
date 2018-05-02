<div class="card" id="app">
  <div class="card-header">
    <span class="fa fa-dashboard"></span>
    Solicitudes De Servicio
  </div>
  <div class="card-body">
    <solicitudes ref="solicitudes" @detallar="detallar" @habilitar="habilitar" @confirmar="confirmar"/>
  </div>
  <modal ref="detalle" title="Detalles" hide-footer>
    <detalle-solicitud v-if="cliente" :cliente="cliente"/>
  </modal>
  <modal ref="cita" title="Asignar Cita" hide-footer>
    <cita-form v-if="cliente" :cliente="cliente" @updated="habilitado"></cita-form>
  </modal>
  <modal ref="confirmacion" title="Confirmar Instalacion de servicio" @ok="confirmado()" cancel-title="Cancelar">
    <p class="text-center">Deseas Confirmar la instalacion del servicio por parte del tecnico?</p>
  </modal>

</div>

@push('scripts')
  <script src="{{ asset('dist/operador.js') }}"></script>
@endpush