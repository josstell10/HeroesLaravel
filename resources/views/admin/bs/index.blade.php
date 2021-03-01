@extends('layouts.app')

@section('content')
<div class="row">
    <h1>Simulación Batalla </h1>
</div>
<div class="row text-center text-white">
    <div class="col bg-primary">
        <h3>Hero</h3>
    </div>
    <div class="col bg-warning">
        <h3>VS</h3>
    </div>
    <div class="col bg-danger">
        <h3>Enemy</h3>
    </div>
</div>
    <div class="row bg-info">
        <div class="col">
            <h3 class="text-center text-white">Eventos</h3>
        </div>
    </div>
<div class="row my-3">
    <div class="alert alert-success" role="alert">Heroe Ataca</div>
    <div class="alert alert-danger" role="alert">Enemigo Ataca</div>
</div>

@endsection
