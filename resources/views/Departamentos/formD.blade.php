@extends('layouts.app')

@section('formD')
<h1>Registro de Departamentos</h1>
<form action="{{ route('departamento.store') }}" method="POST">
    @csrf

    <label for="nombre_depto">Nombre del Departamento</label>
    <input type="text" name="nombre_depto" id="nombre_depto">

    <input type="submit" value="Enviar">
    <a href="{{ route('departamentos.tablaD') }}" class="ass">Atrás</a>
</form>

@if(session('success'))
    <p class="success-message">{{ session('success') }}</p>
@endif

@endsection
