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
  <a href="/determinaciones/create" class="btn btn-success nuevo" >Nuevo</a>
	<table class="table">
		<thead>
			<th>Determinacion</th>
			<th>Tecnica</th>
			<th>Tipo</th>
			<th>Estado</th>
			<th>Operaciones</th>

		</thead>
		@foreach($determinaciones as $determinacion)
		<tbody>
			<td>{{ $determinacion->determinacion }}</td>
			<td>{{ $determinacion->tecnica }}</td>
			<td>{{ $determinacion->tipo }}</td>
			<td>{{ $determinacion->estado }}</td>

			<td>{!! link_to_route('determinaciones.edit', $title = 'Editar', $parameters = $determinacion->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['determinaciones.destroy', $determinacion->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $determinaciones->render() !!}

@stop
