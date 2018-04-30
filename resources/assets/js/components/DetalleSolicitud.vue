<template>
    <table class="table table-bordered table-hover table-sm">
        <tbody>
            <tr>
                <th>Nombre:</th>
                <td>{{ cliente.nombre }}</td>
            </tr>
            <tr>
                <th>Cedula:</th>
                <td>{{ cliente.cedula }}</td>
            </tr>
            <tr>
                <th>Correo:</th>
                <td>{{ cliente.correo }}</td>
            </tr>
            <tr>
                <th>Telefono:</th>
                <td>{{ cliente.telefono }}</td>
            </tr>
            <tr>
                <th>Departamento:</th>
                <td>{{ cliente.municipio.departamento.nombre }}</td>
            </tr>
            <tr>
                <th>Municipio:</th>
                <td>{{ cliente.municipio.nombre }}</td>
            </tr>
            <tr>
                <th>Direccion:</th>
                <td>{{ cliente.direccion }}</td>
            </tr>
            <tr>
                <th>Servicio:</th>
                <td>{{ cliente.solicitud.servicio.nombre }}</td>
            </tr>
            <tr>
                <th>Estado:</th>
                <td class="text-uppercase">{{ cliente.solicitud.estado }}</td>
            </tr>
            <tr>
                <th>Costo:</th>
                <td>${{ cliente.solicitud.ingreso | currency }}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    props: ['cliente']
}
</script>
