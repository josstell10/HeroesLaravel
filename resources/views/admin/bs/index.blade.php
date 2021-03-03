@extends('layouts.app')

@section('content')
<div class="row">
    <h1>Simulación Batalla </h1>
</div>
<div class="row text-center text-white">
    <div class="col-5 bg-primary">
        <h3>Hero</h3>
    </div>
    <div class="col-2 bg-warning">
        <h3>VS</h3>
    </div>
    <div class="col-5 bg-danger">
        <h3>Enemy</h3>
    </div>
</div>
    <div class="row bg-info">
        <div class="col">
            <h3 class="text-center text-white">Eventos</h3>
        </div>
    </div>
<div class="row my-3">
    @foreach($events as $event)
        <div @if($event['Winner'] == 'Hero') class="alert alert-info" @else class="alert alert-danger" @endif role="alert">{{$event['Text']}}</div>
    @endforeach
</div>

@endsection
