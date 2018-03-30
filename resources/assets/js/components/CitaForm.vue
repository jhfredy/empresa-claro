<template>
  <form>
    <div class="form-group">
      <label for="fecha">Fecha y Hora</label>   
      <datetime input-class="form-control" name="fecha" type="datetime" 
        v-model="cita.fecha" use12-hour required/>
    </div>
    <div class="form-group">
      <label for="tecnico">Tecnico</label>
      <select class="form-control" name="tecnico" v-model.number="cita.user_id" required>
        <option v-for="tecnico in tecnicos" :key="tecnico.id" :value="tecnico.id">
          {{ tecnico.name }}
        </option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary m-auto d-block">
      Asignar Cita
    </button>
  </form>
</template>

<script>
import 'vue-datetime/dist/vue-datetime.css';
import { Datetime } from 'vue-datetime';

export default {
  props: {
    cliente: { type: Object, required: true }
  },
  components: { Datetime },
  data() {
    return {
      cita: {
        fecha: null,
        user_id: null,
        solicitud_id: this.cliente.solicitud.id
      },
      tecnicos: []
    };
  },
  created() {
    axios.get('/api/user/tecnicos').then(res => this.tecnicos = res.data)
  },
  watch: {
    cliente() {
      this.cita.solicitud_id = this.cliente.solicitud.id
    }
  },
  computed: {
    tecnico_options() {
      return this.tecnicos.map(tec => ({
        value: tec.id,
        text: tec.name
      }));
    }
  }
};
</script>
