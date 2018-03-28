<template>
    <form @submit="safeExec(store)">
        <form-input-h name="nombre" label="Nombre:"></form-input-h>
    </form>
</template>
<script>
import FormInputH from "./inputs/FormInputH";
export default {
    components:{FormInputH},
  
}
</script>

