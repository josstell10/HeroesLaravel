@extends('layouts.app')

@section('content')

    <div class="row">
        <h1>Listado Enemigos</h1>
        <div class="col">
            <a href="{{ route('enemys.create') }}" class="my-3 btn btn-primary">Crear Enemigo</a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">HP</th>
                <th scope="col">Ataque</th>
                <th scope="col">Defensa</th>
                <th scope="col">Monedas</th>
                <th scope="col">Experiencia</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($enemys as $enemy)
                <tr>
                    <th scope="row">{{ $enemy->id }}</th>
                    <td>{{ $enemy->name }}</td>
                    <td>{{ $enemy->hp }}</td>
                    <td>{{ $enemy->atq }}</td>
                    <td>{{ $enemy->def }}</td>
                    <td>{{ $enemy->coins }}</td>
                    <td>{{ $enemy->xp }}</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('enemys.edit', $enemy->id) }}" class=" btn btn-warning">Modificar</a>
                            </div>
                            <div class="col">
                                <form action="{{ route('enemys.destroy', $enemy->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endForeach
            </tbody>
        </table>
    </div>

@endsection
