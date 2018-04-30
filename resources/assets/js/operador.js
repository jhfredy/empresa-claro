import './bootstrap'
import Vue from 'vue'
import Solicitudes from './components/Solicitudes'
import DetalleSolicitud from './components/DetalleSolicitud'
import CitaForm from './components/CitaForm'
import Modal from 'bootstrap-vue/es/components/modal/modal';
import CurrencyFilter from 'vue-currency-filter'
import Axios from 'axios';


Vue.use(CurrencyFilter)

new Vue({
    el: '#app',
    data: { cliente: null },
    components: { Solicitudes, Modal, DetalleSolicitud, CitaForm },
    methods: {
        detallar(cliente) {
            this.cliente = cliente
            this.$refs.detalle.show()
        },
        habilitar(cliente) {
            this.cliente = cliente;
            this.$refs.cita.show();
        },
        habilitado() {
            this.$refs.cita.hide();
            this.$refs.solicitudes.fetch();
        },
        confirmar(cliente) {
            this.cliente = cliente;
            this.$refs.confirmacion.show()
        },
        async confirmado() {
            await axios.post('/api/solicitud/confirmar/' + this.cliente.solicitud.id)
            await this.$refs.solicitudes.fetch();
            this.$refs.confirmacion.hide();
            toastr.success('Servicio Confirmado!')
        }
    }
})