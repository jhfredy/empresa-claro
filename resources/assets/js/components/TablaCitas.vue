<template>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th class="text-center">Servico</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Departamento</th>
                <th class="text-center">Municipio</th>
                <th class="text-center" colspan="2">Direccion</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="cita in citas" :key="cita.id" class="text-center">
                <td>{{ cita.solicitud.servicio.nombre }}</td>
                <td>{{ cita.fecha }}</td>
                <td>{{ cita.solicitud.cliente.municipio.departamento.nombre }}</td>
                <td>{{ cita.solicitud.cliente.municipio.nombre }}</td>
                <td>{{ cita.solicitud.cliente.direccion }}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ['citas']
}
</script>
