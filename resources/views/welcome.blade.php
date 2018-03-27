@extends('layouts.index.master')

@section('body')
<section id="servicios">
  <div class="container">
    <div class="row justify-content-center" v-if="servicio">
      <div class="col-md-10 col-sm-12">
        <registro :servicio="servicio"></registro>
      </div>
    </div>
    <servicios v-if="!servicio" @selected="servicio = $event"></servicios>
  </div>
</section>
@endsection

@push('scripts')
    <script src="/js/registro.js"></script>
@endpush