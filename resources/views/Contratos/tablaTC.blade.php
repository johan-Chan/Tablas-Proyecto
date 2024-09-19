@extends('layouts.app')

@section('tablaTC')

<div class="container">
    <h1>Tipos de Contrato</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Contrato</th>
                <th>Crear</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tiposContrato as $tipoContrato)
                <tr>
                    <td>{{ $tipoContrato->id_tipo_contrato }}</td>
                    <td>{{ $tipoContrato->tipo_contrato }}</td>
                    <td><a href="{{ route('tipo_contrato.create') }}" class="btn">Registrar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
