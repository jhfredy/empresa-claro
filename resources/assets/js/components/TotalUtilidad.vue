<template>
    <div class="alert alert-success text-center">
        <h3 class="d-inline">Utilidad: {{ total | currency }} </h3>
    </div>
</template>
<script>
export default {
    props: ['total']
}
</script>
