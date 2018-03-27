@extends('layouts.index.master')

@section('body')
<section id="servicios">
  <div class="container ">
    <servicios></servicios>
  </div>
</section>
@endsection

@push('scripts')
    <script src="/js/registro.js"></script>
@endpush