import './bootstrap'
import Vue from 'vue'
import Servicios from './components/Servicios'
import CurrencyFilter from 'vue-currency-filter'

Vue.use(CurrencyFilter)

new Vue({
    el: '#servicios',
    components: { Servicios },
})