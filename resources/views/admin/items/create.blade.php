@extends('layouts.app')

@section('content')
    <h1>Crear Item</h1>
    <form action="{{ route('items.store') }}" method="post">
        @csrf
        @include('admin.items.form')
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary mb-3">Crear</button>
        </div>
    </form>

@endsection
