import './bootstrap'
import Vue from 'vue'
import Solicitudes from './components/Solicitudes'
import DetalleSolicitud from './components/DetalleSolicitud'
import CitaForm from './components/CitaForm'
import Modal from 'bootstrap-vue/es/components/modal/modal';
import CurrencyFilter from 'vue-currency-filter'


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
        }
    }
})