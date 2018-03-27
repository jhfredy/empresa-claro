<template>
  <div class="row align-items-center">
    <div class="col-md-3" v-for="servicio in servicios" :key="servicio.id">
      <div class="card my-2">
        <div class="card-body text-center">
          <i class="fa fa-4x fa-globe"></i>
          <h4>{{ servicio.nombre }}</h4>
          <b>${{ servicio.costo | currency }}</b>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary btn-block" @click="$emit('selected', servicio)">
            Contratar
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return { servicios: [] };
  },
  created() {
    axios.get("/api/servicio").then(res => (this.servicios = res.data));
  }
};
</script>

<style scoped>

</style>

