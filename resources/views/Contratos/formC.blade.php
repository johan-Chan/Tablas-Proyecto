@extends('layouts.app')

@section('formC')
<h1>Registro de Contratos</h1>
<form action="{{ route('contrato.store') }}" method="POST">
    @csrf

    <label for="fecha_inicio">Fecha de Inicio</label>
    <input type="date" name="fecha_inicio" id="fecha_inicio">

    <label for="fecha_fin">Fecha de Fin</label>
    <input type="date" name="fecha_fin" id="fecha_fin">

    <label for="estado_contrato">Estado del Contrato</label>
    <input type="text" name="estado_contrato" id="estado_contrato">

    <label for="periodo_pago">Periodo de Pago</label>
    <input type="text" name="periodo_pago" id="periodo_pago">

    <label for="id_tipo_contrato">Tipo de Contrato</label>
    <select name="id_tipo_contrato" id="id_tipo_contrato">
        <option value="">Seleccionar un tipo</option>
        @foreach($tiposContrato as $tipoContrato)
            <option value="{{ $tipoContrato->id_tipo_contrato }}">{{ $tipoContrato->tipo_contrato }}</option>
        @endforeach
    </select>

    <input type="submit" value="Enviar">
    <a href="{{ route('contratos.tablaC') }}" class="ass">Atrás</a>
</form>

@if(session('success'))
    <p class="success-message">{{ session('success') }}</p>
@endif

@endsection
