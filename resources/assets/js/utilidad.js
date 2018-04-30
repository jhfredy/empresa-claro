import './bootstrap'
import Vue from 'vue'
import { sumBy } from 'lodash'
import Currency from 'vue-currency-filter'
import TablaUtilidad from './components/TablaUtilidad'
import TotalUtilidad from './components/TotalUtilidad'

Vue.use(Currency, { symbol: '$' })

new Vue({
    el: '#app',
    components: { TablaUtilidad, TotalUtilidad },
    data: {
        solicitudes: []
    },
    async created() {
        this.solicitudes = (await axios.get('/api/utilidad/solicitudes')).data
    },
    computed: {
        total() {
            return sumBy(this.solicitudes, 'ingreso')
        }
    }
})