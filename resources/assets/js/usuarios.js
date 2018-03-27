import Vue from "vue";
import "./bootstrap";
new Vue({
    el: '#app',
    components: {},
    data() {
        return {
            usuarios: [],

        }
    },
    created() {
        axios.get('usuarios')
    }
});