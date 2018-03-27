@extends('layouts.dash.master')

@section('body')
<div class="row">
  <div class="col-12">
    <div id="app">
      <div class="table-responsive">
        <table class="table table-hover table-bordered table-condensed">
            <thead>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Rol</th>
                <th class="text-center">Operación</th>
            </thead>
            <tbody>
                <tr v-for="user in usuarios" class="text-center">
                    <td v-text="user.name"></td>
                    <td v-text="user.email"></td>
                    <td v-text="user.rol"></td>
                    <td>
                      <button class="editar-modal btn btn-danger" title="Eliminar Usuario" @click.prevent="destroy(user)" >
                        
                            <span class="fa fa-trash"></span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
    <script src="/js/usuarios.js"></script>
@endpush
