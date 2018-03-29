<template>
    <div class="card my-3">
      <div class="card-header bg-primary">
        <h4 class="m-0 text-light">
          Contratar {{ servicio.nombre }} (${{ servicio.costo | currency }})
        </h4>
      </div>
      <div class="card-body"> 
        <form @submit.prevent="safeExec(registrar)">

          <form-input-h name="nombre" label="Nombre:" 
            v-model="cliente.nombre"
            v-validate="'required|alpha_spaces'"
            :error-messages="errors.collect('nombre')"/>

          <form-input-h name="cedula" label="Cedula:" 
            v-model="cliente.cedula"
            v-validate="'required|numeric'"
            :error-messages="errors.collect('cedula')"/>

          <form-input-h type="email" name="correo" label="Correo:" 
            v-model="cliente.correo"
            v-validate="'required|email'"
            :error-messages="errors.collect('correo')"/>

          <form-input-h type="tel" name="telefono" label="Teléfono:" 
            v-model="cliente.telefono"
            v-validate="'required'"
            :error-messages="errors.collect('telefono')"/>

          <form-input-h name="direccion" label="Dirección:"
            v-model="cliente.direccion"
            v-validate="'required'"
            :error-messages="errors.collect('direccion')"/>

          <form-ubicacion @municipio="cliente.municipio_id = $event"/>
          <button class="btn btn-primary m-auto d-block" type="submit">Contratar</button>
        </form>
      </div>
    </div>
</template>
<script>
import FormInputH from './inputs/FormInputH'
import FormUbicacion from './inputs/FormUbicacion'
export default {
    components: { FormInputH, FormUbicacion },
    props: ['servicio'],
    data() {
      return { cliente: {} }
    },
    mounted() {
      this.cliente.servicio_id = this.servicio.id
    },
    methods: {
      registrar() {
        axios.post('/api/cliente', this.cliente)
          .then(res => this.$emit('created', {
            cliente: res.data,
            servicio: this.servicio
          }))
          .catch(reason => this.setErrors(reason.response.data.errors))
      }
    }
};
</script>
