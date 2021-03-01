@extends('layouts.app')

@section('content')

	<div class="row">
		<h1>Listado Heroes</h1>
		<div class="col">
			<a href="{{ route('admin.heroes.create') }}" class="my-3 btn btn-primary">Crear Heroe</a>
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
		      <th scope="col">Monedas</th>
		      <th scope="col">Experiencia</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($heroes as $hero)
		    <tr>
		      <th scope="row">{{ $hero->id }}</th>
		      <td>{{ $hero->name }}</td>
		      <td>{{ $hero->hp }}</td>
		      <td>{{ $hero->atq }}</td>
		      <td>{{ $hero->def }}</td>
		      <td>{{ $hero->luck }}</td>
		      <td>{{ $hero->coins }}</td>
		      <td>{{ $hero->xp }}</td>
		      <td>
                  <div class="row">
                      <div class="col">
                          <a href="{{ route('admin.heroes.edit',['id'=> $hero->id ]) }}" class=" btn btn-warning">Modificar</a>
                      </div>
                      <div class="col">
                          <form action="{{ route('admin.heroes.destroy',['id'=> $hero->id]) }}" method="post">
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

