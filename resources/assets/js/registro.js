import './bootstrap'
import Vue from 'vue'
import Servicios from './components/Servicios'
import Registro from './components/Registro'
import Alert from 'bootstrap-vue/es/components/alert/alert';
import CurrencyFilter from 'vue-currency-filter'
import Validate from './plugins/Validate'

Vue.use(CurrencyFilter)
Vue.use(Validate)

new Vue({
    el: '#servicios',
    components: { Servicios, Registro, Alert },
    data: { servicio: null, created: null },
    methods: {
        registro(created) {
            this.created = created;
            this.servicio = null
        }
    }
})