<template>
    <div class="row">
        <div class="col-md-4">
            <div class="alert alert-success text-center">
                <h3 class="d-inline">Ingreso: {{ ingreso | currency }} </h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="alert alert-warning text-center">
                <h3 class="d-inline">Egreso: {{ egreso | currency }} </h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="alert alert-info text-center">
                <h3 class="d-inline">Utilidad: {{ total | currency }} </h3>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['ingreso', 'egreso'],
    computed: {
        total() {
            return this.ingreso - this.egreso
        }
    }
}
</script>
