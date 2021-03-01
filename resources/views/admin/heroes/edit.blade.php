@extends('layouts.app')

@section('content')
    <h1>Editar Heroe</h1>
    <form action="{{ route('admin.heroes.update', ['id'=> $hero->id]) }}" method="post">
        @csrf
        @method('POST')
        @include('admin.heroes.form')
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success mb-3">Modificar</button>
        </div>
    </form>

@endsection
