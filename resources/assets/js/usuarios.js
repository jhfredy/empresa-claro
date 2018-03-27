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
        axios.get('/api/usuarios').then(response => {
            this.usuarios = response.data;
        });
    },
    methods: {
        add(usuarios) {
            this.usuarios.push(usuario);
            this.data = this.usuarios;

        },
        destroy(user) {
            axios.delete('/api/usuarios' + user.id)
                .then(() => {
                    this.usuarios = this.data = this.usuarios.filter(value => value != user);
                });
        }
    }
});