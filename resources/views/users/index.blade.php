@extends('layouts.appMenu')

@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('message') }}
</div>


@endif

@section('tabla')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo de Usuario</th>
		</thead>
		@foreach($usuarios as $usuario)
		<tbody>
			<td>{{ $usuario->name }}</td>
			<td>{{ $usuario->email }}</td>
			<td>{{ $usuario->tipoUser }}</td>
			<td>{!! link_to_route('usuarios.edit', $title = 'Editar', $parameters = $usuario->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
		</tbody>
		@endforeach
	</table>

	{!! $usuarios->render() !!}

@stop
