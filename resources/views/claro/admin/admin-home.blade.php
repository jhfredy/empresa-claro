<div class="card" id="app">
    <div class="card-header">
        <span class="fa fa-dashboard"></span>
        Utilidad
    </div>
    <div class="card-body">
        <total-utilidad :total="total"></total-utilidad>
        <tabla-utilidad :solicitudes="solicitudes"></tabla-utilidad>
    </div>
</div>
      
@push('scripts')
    <script src="{{ asset('dist/utilidad.js') }}"></script>
@endpush