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
    <div class="row">
      <div class="col-sm-6">
        <b-button class="btn btn-dark center" @click="openCreateModal()">
        <i class="fa fa-plus"></i> Crear Usuario</b-button>
      </div>
    </div>

    <b-modal ref="myModal" hide-footer title="REGISTRO DE USUARIOS">
      <div class="d-block text-center">
        <div>
            <b-form @submit.prevent="store()">
                <b-form-input  v-model="newUser.name"type="text" placeholder="Nombre" required>
                    <div class="form-control-feedback">{{ formError[0] }}</div>
                </b-form-input>
                <br>
                <b-form-input v-model="newUser.email" type="email" placeholder="Email" required></b-form-input>
                <br>
                <b-form-input v-model="newUser.password"type="password" placeholder="Contraseña" required></b-form-input>
                <br>
                <b-form-input v-model="newUser.password_confirmation" type="password" placeholder="Confirmar Contraseña" required></b-form-input>
                <br>
                <b-form-select v-model="newUser.rol" label="Rol" name="Rol" :options="roles" >
        
                </b-form-select>
                <br>
                <br>
                <button type="submit" class="btn btn-blue">
                    <i class="fa fa-plus"></i>Registrar
                </button>
            </b-form>
        </div>
      </div>
    </b-modal>
    
    </div>
  </div>
</div>
@endsection

@push('scripts')
    <script src="/js/usuarios.js"></script>
@endpush
