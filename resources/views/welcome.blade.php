@extends('layouts.index.master')

@section('body')
<section id="servicios">
  <div class="container">
    <div class="row justify-content-center mb-3" v-if="servicio">
      <div class="col-md-12 col-lg-10">
        <registro :servicio="servicio" @created="registro"></registro>
        <hr>
        <button class="btn btn-secondary m-auto d-block" @click="servicio = null">
          Cancelar
        </button>
      </div>
    </div>
    <section v-else>
      <alert show dismissible v-if="created" class="mt-4">
        Su solicitud para contratar el servicio
        <b>@{{ created.servicio.nombre }}</b>
        ha sido enviada
      </alert>
      <servicios @selected="servicio = $event"></servicios>
    </section>
  </div>
</section>
@endsection

@push('scripts')
    <script src="/dist/registro.js"></script>
@endpush