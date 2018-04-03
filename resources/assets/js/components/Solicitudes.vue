<template>
  <table class="table table-bordered table-responsive-sm">
    <thead class="thead-light">
      <tr>
        <th class="text-center">Nombre</th>
        <th class="text-center">Servicio</th>
        <th class="text-center">Estado</th>
        <th class="text-center">Costo</th>
        <th class="text-center" colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="cliente in clientes" :key="cliente.id" class="text-center">
        <td>{{ cliente.nombre }}</td>
        <td>{{ cliente.solicitud.servicio.nombre }}</td>
        <td class="text-uppercase">{{ cliente.solicitud.estado }}</td>
        <td>${{ cliente.solicitud.ingreso | currency }}</td>
        <td>
          <button class="btn btn-info btn-sm" @click="$emit('detallar', cliente)">
            Detalles
          </button>
        </td>
        <td>
          <button 
            class="btn btn-primary btn-sm" 
            v-if="cliente.solicitud.estado == 'pedido'"
            @click="$emit('habilitar', cliente)">
            Habilitar
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</template>
<script>
export default {
  data() {
    return { clientes: [] };
  },
  created() {
    this.fetch()
  },
  methods: {
    fetch() {
      axios.get("/api/cliente").then(res => (this.clientes = res.data));
    }
  }
};
</script>
