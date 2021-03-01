@extends('layouts.app')

@section('content')
    <h1>Editar Item - {{ $item->name }}</h1>
    <form action="{{ route('items.update', $item->id) }}" method="post">
        @csrf
        @method('PUT')
        @include('admin.items.form')

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary mb-3">Crear</button>
        </div>
    </form>

@endsection
