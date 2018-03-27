import './bootstrap'
import Vue from 'vue'
import Servicios from './components/Servicios'
import Registro from './components/Registro'
import CurrencyFilter from 'vue-currency-filter'

Vue.use(CurrencyFilter)

new Vue({
    el: '#servicios',
    components: { Servicios, Registro },
    data: { servicio: null }
})