@extends('layouts.app')

@section('formE')
<h1>Registro de Estudios</h1>
<form action="{{ route('estudios.store') }}" method="POST">
    @csrf

    <label for="institucion">Institución</label>
    <input type="text" name="institucion" id="institucion">

    <label for="año_inicio">Año de Inicio</label>
    <input type="date" name="año_inicio" id="año_inicio">

    <label for="año_fin">Año de Fin</label>
    <input type="date" name="año_fin" id="año_fin">

    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo">

    <label for="nivel_estudio">Nivel de Estudio</label>
    <input type="text" name="nivel_estudio" id="nivel_estudio">

    <input type="submit" value="Enviar">
    <a href="{{ url('/estudioT') }}" class="ass">Atrás</a>
</form>

@if(session('success'))
    <p class="success-message">{{ session('success') }}</p>
@endif

@endsection
