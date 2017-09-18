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
  <a href="/analisis/create" class="btn btn-success nuevo" >Nuevo</a>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Operativo</th>
			<th>Precio</th>
			<th>Tipo</th>
			<th>Operaciones</th>
			<th></th>
		</thead>
		@foreach($analisis as $analis)
		<tbody>
			<td>{{ $analis->nombre }}</td>
			<td>{{ $analis->descripcion }}</td>
			<td>{{ $analis->operativo }}</td>
			<td>{{ $analis->precio }}</td>
			<td>{{ $analis->tipo }}</td>
			<td>{!! link_to_route('analisis.edit', $title = 'Editar', $parameters = $analis->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['analisis.destroy', $analis->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $analisis->render() !!}

@stop
