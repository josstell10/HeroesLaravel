@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Admin</h1>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Entidad</th>
                    <th>Cantidad de elementos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($list as $reporte)
                <tr>
                    <td>{{ $reporte['name'] }}</td>
                    <td>{{ $reporte['counter'] }}</td>
                    <td>
                        <a href="{{ route($reporte['route']) }}" class="btn btn-primary">Ir a {{ $reporte['name'] }}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
