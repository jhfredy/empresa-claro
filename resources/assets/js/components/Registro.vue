<template>
    <div class="card my-3">
      <div class="card-header bg-primary">
        <h4 class="m-0 text-light">
          Contratar {{ servicio.nombre }} (${{ servicio.costo | currency }})
        </h4>
      </div>
      <div class="card-body"> 
        <form>
          <form-input-h name="nombre" label="Nombre:"/>
          <form-input-h name="cedula" label="Cedula:"/>
          <form-input-h type="email" name="correo" label="Correo:"/>
          <form-input-h type="tel" name="telefono" label="Teléfono:"/>
          <form-input-h name="direccion" label="Dirección:"/>
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
    }
};
</script>
