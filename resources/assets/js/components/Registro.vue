<template>
    <div class="card my-3">
      <div class="card-header bg-primary">
        <h4 class="m-0 text-light">
          Contratar {{ servicio.nombre }} (${{ servicio.costo | currency }})
        </h4>
      </div>
      <div class="card-body"> 
        <form>
          <form-input-h name="nombre" label="Nombre:"></form-input-h>
          <form-input-h name="cedula" label="Cedula:"></form-input-h>
          <form-input-h type="email" name="correo" label="Correo:"></form-input-h>
          <form-input-h type="tel" name="telefono" label="Teléfono:"></form-input-h>
          <form-input-h name="direccion" label="Dirección:"></form-input-h>
          <button class="btn btn-primary m-auto d-block" type="submit">Contratar</button>
        </form>
      </div>
    </div>
</template>
<script>
import FormInputH from './inputs/FormInputH'
export default {
    components: { FormInputH },
    props: ['servicio']
};
</script>
