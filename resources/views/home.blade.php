@extends('layouts.dash.master')

@php
    $role = Auth::user()->rol;
@endphp

@section('body')
  @includeWhen($role == 'admin', 'claro.admin.admin-home')
  @includeWhen($role == 'operador', 'claro.operador.operador-home')
  @includeWhen($role == 'tecnico', 'claro.tecnico.tecnico-home')
@endsection
