@extends('layouts.auth.master')

@section('header', 'Recuperar Contraseña')

@section('body')
@include('components.errors')
@include('components.status')
<form method="post" action="{{ route('password.email') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="email">Correo</label>
    <input class="form-control" name="email" type="email" aria-describedby="emailHelp" placeholder="Digite el correo">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Recuperar Contraseña</button>
</form>            
@endsection
