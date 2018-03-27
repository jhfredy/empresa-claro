import Vue from "vue";
import "./bootstrap";
import bModal from "bootstrap-vue/es/components/modal/modal";
import bButton from "bootstrap-vue/es/components/button/button";




new Vue({
    el: '#app',
    components: { bModal, bButton },
    data() {
        return {
            usuarios: [],
            modal: false,


        }
    },
    created() {
        axios.get('/api/usuarios/').then(response => {
            this.usuarios = response.data;
        });
    },
    methods: {
        add(usuarios) {

            this.usuarios.push(usuarios);
            this.data = this.usuarios;


        },
        destroy(user) {
            axios.delete('/api/usuarios/' + user.id)
                .then(() => {
                    this.usuarios = this.data = this.usuarios.filter(value => value != user);
                });
        },
        openCreateModal() {
            this.$refs.myModal.show();
        }
    }
});