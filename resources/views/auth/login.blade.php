@extends('layouts.auth.master')

@section('header', 'Inicio de Sesión')

@section('body')
@include('components.errors')
<form method="post" action="{{ route('login') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="email">Correo</label>
    <input class="form-control" name="email" type="email" aria-describedby="emailHelp" placeholder="Digite el correo">
  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input class="form-control" name="password" type="password" placeholder="Contraseña">
  </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox">Recordar Contraseña</label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Iniciar Session</button>
</form>

<div class="text-center mt-1">
  <a class="d-block small" href="{{ route('password.request') }}">Se le olvido la contraseña?</a>
</div>
@endsection
