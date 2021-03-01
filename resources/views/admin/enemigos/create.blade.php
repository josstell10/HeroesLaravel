@extends('layouts.app')

@section('content')
    <h1>Crear Enemigo</h1>
    <form action="{{ route('enemys.store') }}" method="post">
        @csrf
        @include('admin.enemigos.form')
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary mb-3">Crear</button>
        </div>
    </form>

@endsection
