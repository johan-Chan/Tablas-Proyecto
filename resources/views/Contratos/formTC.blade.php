@extends('layouts.app')

@section('formTC')
<h1>Registro de Tipo de Contrato</h1>
<form action="{{ route('tipo_contrato.store') }}" method="POST">
    @csrf

    <label for="tipo_contrato">Tipo de Contrato</label>
    <input type="text" name="tipo_contrato" id="tipo_contrato">

    <input type="submit" value="Enviar">
    <a href="{{ route('tipo_contrato.index') }}" class="ass">Atrás</a>
</form>

@if(session('success'))
    <p class="success-message">{{ session('success') }}</p>
@endif

@endsection
