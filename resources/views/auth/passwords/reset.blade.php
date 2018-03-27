@extends('layouts.auth.master')

@section('header', 'Recuperar Contraseña')

@section('body')
@include('components.errors')
<form method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
      <label for="email">Correo</label>
      <input class="form-control" name="email" type="email" aria-describedby="emailHelp" placeholder="Digite el correo">
    </div>

    <div class="form-group">
      <label for="password">Contraseña</label>
      <input class="form-control" name="password" type="password" aria-describedby="passwordHelp" placeholder="Digite la contraseña">
    </div>

    <div class="form-group">
      <label for="password_confirmation">Confirmar Contraseña</label>
      <input class="form-control" name="password_confirmation" type="password" aria-describedby="passwordHelp" placeholder="Digite la contraseña">
    </div>

    <button type="submit" class="btn btn-primary btn-block">Establecer Nueva Contraseña</button>

</form>
@endsection
