import Vue from "vue";
import "./bootstrap";
import bModal from "bootstrap-vue/es/components/modal/modal";
import bButton from "bootstrap-vue/es/components/button/button";
import bFormInput from "bootstrap-vue/es/components/form-input/form-input";
import bForm from "bootstrap-vue/es/components/form/form";
import bFormSelect from "bootstrap-vue/es/components/form-select/form-select";
import Validate from './plugins/Validate';
import Alert from 'bootstrap-vue/es/components/alert/alert';
import CurrencyFilter from 'vue-currency-filter';
import FormInput from './components/inputs/FormInput';



Vue.use(Validate)
new Vue({
    el: '#app',
    components: { bModal, bButton, bFormInput, bForm, bFormSelect, FormInput, Validate },
    data() {
        return {
            usuarios: [],
            modal: false,
            newUser: {},
            formError: {},
            rol: null,
            roles: [
                { value: 'admin', text: 'Administrador' },
                { value: 'operador', text: 'Operador' },
                { value: 'tecnico', text: 'Tecnico' },
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
                .catch(error => this.formError = this.setErrors(error.response.data.errors));
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