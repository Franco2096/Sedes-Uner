

@extends('layouts.appMenu')

@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('message') }}
 </div>


@endif

@section('tabla')
	<style >
		.nuevo{
			width: 200px;
		}
	</style>
  <a href="/clientes/create" class="btn btn-success nuevo" >Nuevo</a>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Dni</th>
			<th>Provincia</th>
			<th>ciudad</th>
			<th>Direccion</th>
			<th>Email</th>
		</thead>
		@foreach($clientes as $cliente)
		<tbody>
			<td>{{ $cliente->nombre }}</td>
			<td>{{ $cliente->dni }}</td>
			<td>{{ $cliente->provincia }}</td>
			<td>{{ $cliente->ciudad }}</td>
			<td>{{ $cliente->direccion }}</td>
			<td>{{ $cliente->email }}</td>



			<td>{!! link_to_route('clientes.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['clientes.destroy', $cliente->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $clientes->render() !!}

@stop
