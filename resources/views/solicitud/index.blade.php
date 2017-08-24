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
  <a href="/solicitud/create" class="btn btn-success nuevo" >Nuevo</a>
	<table class="table">
		<thead>
			<th>Titulo</th>
			<th>Descripcion</th>
			<th>Cliente Solicitante</th>
			<th></th>
		</thead>
		@foreach($solicitudes as $solicitud)
		<tbody>
			<td>{{ $solicitud->titulo }}</td>
			<td>{{ $solicitud->descripcion }}</td>
			<td>{!! link_to_route('solicitud.edit', $title = 'Editar', $parameters = $solicitud->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['solicitud.destroy', $solicitud->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $solicitudes->render() !!}

@stop
