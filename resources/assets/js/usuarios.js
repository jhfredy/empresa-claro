import Vue from "vue";
import "./bootstrap";
import bModal from "bootstrap-vue/es/components/modal/modal";
import bButton from "bootstrap-vue/es/components/button/button";
import bFormInput from "bootstrap-vue/es/components/form-input/form-input";
import bForm from "bootstrap-vue/es/components/form/form";
import bFormSelect from "bootstrap-vue/es/components/form-select/form-select";




new Vue({
    el: '#app',
    components: { bModal, bButton, bFormInput, bForm, bFormSelect },
    data() {
        return {
            usuarios: [],
            modal: false,
            newUser: {},
            formError: {},
            rol: null,
            roles: [{ value: null, text: 'Seleccionar', },
                { value: 'admin', text: 'admin' },
                { value: 'operador', text: 'operador' },
                { value: 'tecnico', text: 'tecnico' },
            ],
            show: true,
        }


    },
    created() {
        axios.get('/api/usuarios/').then(response => {
            this.usuarios = response.data;
        });
    },
    methods: {
        store() {
            axios.post('/api/usuarios/', this.newUser)
                .then(response => {
                    this.usuarios.push(response.data);
                    this.formError = {};
                    this.newUser = {};
                    this.$refs.myModal.hide();
                    toastr.success('Usuario Creado Correctamente');
                })
                .catch(error => this.formError = error.response.data)
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