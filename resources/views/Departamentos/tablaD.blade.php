@extends('layouts.app')

@section('tablaD')

<div class="container">
    <h1>Departamentos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Departamento</th>
                <th>Crear</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->cod_depto }}</td>
                    <td>{{ $departamento->nombre_depto }}</td>
                    <td><a href="{{ route('departamentos.formD') }}" class="btn">Registrar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
