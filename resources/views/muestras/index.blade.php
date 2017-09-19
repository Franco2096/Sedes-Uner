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
  <a href="/muestras/create" class="btn btn-success nuevo" >Nuevo</a>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Presupuesto</th>
			<th>Estado</th>
			<th>Fecha ingreso</th>
			
		</thead>
		@foreach($muestras as $muestra)
		<tbody>
			<td>{{ $muestra->nombre }}</td>
			<td>{{ $muestra->descripcion }}</td>
			<td>{{ $muestra->des }}</td>
			<td>{{ $muestra->estado }}</td>
			<td>{{ $muestra->fecha_ingreso }}</td>
		


			<td>{!! link_to_route('muestras.edit', $title = 'Editar', $parameters = $muestra->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['muestras.destroy', $muestra->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $muestras->render() !!}

@stop
