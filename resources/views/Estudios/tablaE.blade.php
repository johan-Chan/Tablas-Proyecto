@extends('layouts.app')

@section('tablaE')

<div class="container">
    <h1>Estudios</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Institución</th>
                <th>Año de Inicio</th>
                <th>Año de Fin</th>
                <th>Título</th>
                <th>Nivel de Estudio</th>
                <th>Crear</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudios as $estudio)
                <tr>
                    <td>{{ $estudio->id_estudio }}</td>
                    <td>{{ $estudio->institucion }}</td>
                    <td>{{ \Carbon\Carbon::parse($estudio->año_inicio)->format('Y-m-d') }}</td>
                    <td>{{ $estudio->año_fin ? \Carbon\Carbon::parse($estudio->año_fin)->format('Y-m-d') : 'N/A' }}</td>
                    <td>{{ $estudio->titulo }}</td>
                    <td>{{ $estudio->nivel_estudio }}</td>
                    <td><a href="{{ route('estudio.form') }}" class="btn">Registrar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
