<template>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th class="text-center">Servicio</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Ingreso</th>
                <th class="text-center">Gasto</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="solicitud in solicitudes" :key="solicitud.id" class="text-center">
                <th>{{ solicitud.servicio.nombre }}</th>
                <th>{{ solicitud.created_at }}</th>
                <th>{{ solicitud.ingreso | currency }}</th>
                <th>{{ solicitud.servicio.gasto | currency }}</th>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ['solicitudes']
}
</script>
