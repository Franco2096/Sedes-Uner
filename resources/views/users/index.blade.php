@extends('layouts.appMenu')
@section('Abajobarra')
		@if(Session::has('message'))
			<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  {{ Session::get('message') }}
		 </div>
		@endif
@endsection

@section('tabla')
	<style >
		.nuevo{
			width: 200px;
		}
	</style>
  <a href="/usuarios/create" class="btn btn-success nuevo" >Nuevo</a>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo de Usuario</th>
			<th>Operaciones</th>
			<th></th>
		</thead>
		@foreach($usuarios as $usuario)
		<tbody>
			<td>{{ $usuario->name }}</td>
			<td>{{ $usuario->email }}</td>
			<td>{{ $usuario->tipoUser }}</td>
			<td>{!! link_to_route('usuarios.edit', $title = 'Editar', $parameters = $usuario->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['usuarios.destroy', $usuario->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $usuarios->render() !!}

@stop
