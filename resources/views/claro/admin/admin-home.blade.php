<div class="card" id="app">
    <div class="card-header">
        <span class="fa fa-dashboard"></span>

        Utilidad
        <div class="float-right">
            <form action="{{route('reporte')}}" method="POST" target="_blank">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-sm btn-primary">
                    <span class="fa fa-file-pdf-o"></span>
                </button>
            </form>
        </div>
    </div>
    
    <div class="card-body">
        <total-utilidad :ingreso="ingreso" :egreso="egreso"></total-utilidad>
        <tabla-utilidad :solicitudes="solicitudes"></tabla-utilidad>
    </div>
</div>
      
@push('scripts')
    <script src="{{ asset('dist/utilidad.js') }}"></script>
@endpush