@extends('layouts.app')

@section('content')
	<h1>Crear Heroe</h1>
	<form action="{{ route('admin.heroes.store') }}" method="post">
		@csrf
		@include('admin.heroes.form')
		<div class="form-group mt-3">
			<button type="submit" class="btn btn-primary mb-3">Crear</button>
		</div>
	</form>

@endsection
