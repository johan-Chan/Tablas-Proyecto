@extends('layouts.app')

@section('tablaC')

<div class="container">
    <h1>Contratos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Estado del Contrato</th>
                <th>Periodo de Pago</th>
                <th>Tipo de Contrato</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contratos as $contrato)
                <tr>
                    <td>{{ $contrato->id_contrato }}</td>
                    <td>{{ \Carbon\Carbon::parse($contrato->fecha_inicio)->format('Y-m-d') }}</td>
                    <td>{{ $contrato->fecha_fin ? \Carbon\Carbon::parse($contrato->fecha_fin)->format('Y-m-d') : 'N/A' }}</td>
                    <td>{{ $contrato->estado_contrato }}</td>
                    <td>{{ $contrato->periodo_pago }}</td>
                    <td>{{ $contrato->tipoContrato->tipo_contrato }}</td>
                    <td><a href="{{ route('contratos.formC') }}" class="btn">Registrar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
