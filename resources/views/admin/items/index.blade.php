@extends('layouts.app')

@section('content')

    <div class="row">
        <h1>Listado Items</h1>
        <div class="col">
            <a href="{{ route('items.create') }}" class="my-3 btn btn-primary">Crear Item</a>
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
                <th scope="col">Suerte</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->hp }}</td>
                    <td>{{ $item->atq }}</td>
                    <td>{{ $item->def }}</td>
                    <td>{{ $item->luck }}</td>
                    <td>{{ $item->cost }}</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('items.edit', $item->id) }}" class=" btn btn-warning">Modificar</a>
                            </div>
                            <div class="col">
                                <form action="{{ route('items.destroy', $item->id) }}" method="post">
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
