<template>
    <div class="row">
        <div class="col-md-6">
            <form-select name="departamento_id" label="Departamento:" selected=""
                :options="departamento_options" v-model.number="departamento_id"
                @input="$emit('departamento', departamento_id)"
                required/>
        </div>
        <div class="col-md-6">
            <form-select name="municipio_id" label="Municipio:" 
                :options="municipio_options" v-model.number="municipio_id"
                @input="$emit('municipio', municipio_id)"
                required/>
        </div>
    </div>
</template>
<script>
import FormSelect from './FormSelect'
export default {
    components: { FormSelect },
    data() {
        return { 
            departamentos: [], 
            municipios: [], 
            departamento_id: null,
            municipio_id: null 
        }
    },
    mounted() {
        axios.get('/api/departamento').then(res => {
            this.departamentos = res.data;
        });
    },
    watch: {
        departamento_id(id) {
            if(!id) return;
            let departamento = this.departamentos.find(dep => dep.id == id)
            if (departamento.municipios) {
                this.municipios = departamento.municipios;
            } else {
                axios.get(`/api/departamento/${id}/municipios`).then(res => {
                    departamento.municipios = res.data;
                    this.municipios = departamento.municipios;
                });
            }
        }
    },
    computed: {
        departamento_options() {
            return this.departamentos.map(dep => ({
                value: dep.id,
                text: dep.nombre
            }));
        },
        municipio_options() {
            return this.municipios.map(mun => ({
                value: mun.id,
                text: mun.nombre
            }));
        }
    }
}
</script>
