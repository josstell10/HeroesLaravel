@extends('layouts.app')

@section('content')
    <h1>Editar Enemigos - {{ $enemy->name }}</h1>
    <form action="{{ route('enemys.update', $enemy->id) }}" method="post">
        @csrf
        @method('PUT')
        @include('admin.enemigos.form')
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary mb-3">Crear</button>
        </div>
    </form>

@endsection
