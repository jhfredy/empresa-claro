import './bootstrap'
import Vue from 'vue'
import Solicitudes from './components/Solicitudes'
import CurrencyFilter from 'vue-currency-filter'

Vue.use(CurrencyFilter)

new Vue({
    el: '#app',
    components: { Solicitudes }
})