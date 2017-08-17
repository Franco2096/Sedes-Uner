@extends('layouts.admin')

@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('message') }}
</div>

	
@endif

@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>DNI</th>
			<th>Operativo</th>
			<th>Operaciones</th>
		</thead>
		@foreach($analistas as $analista)
		<tbody>
			<td>{{ $analista->nombre }}</td>
			<td>{{ $analista->apellido }}</td>
			<td>{{ $analista->email }}</td>
			<td>{{ $analista->dni }}</td>
			<td>{{ $analista->operativo }}</td>
			<td>{!! link_to_route('analista.edit', $title = 'Editar', $parameters = $analista->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
		</tbody>
		@endforeach
	</table>

	{!! $analistas->render() !!}

@stop