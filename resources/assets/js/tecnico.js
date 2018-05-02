import './bootstrap'
import Vue from 'vue'
import TablaCitas from './components/TablaCitas'

new Vue({
    el: '#app',
    components: { TablaCitas },
    data: {
        citas:[]
    },
    async created() {
        let res = await axios.get('/api/tecnico/citas')
        this.citas = res.data
    }
})