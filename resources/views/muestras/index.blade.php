<<<<<<< HEAD

=======
>>>>>>> master
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
  <a href="/muestras/create" class="btn btn-success nuevo" >Nuevo</a>
	<table class="table">
		<thead>
			<th>Nombre</th>
<<<<<<< HEAD
			<th>descripcion</th>
			<th>presupuesto_id</th>
			<th>estado</th>
			<th>fecha_ingreso</th>
		
=======
			<th>Descripcion</th>
			<th>Presupuesto_id</th>
			<th>Estado</th>
			<th>Fecha ingreso</th>
			
>>>>>>> master
		</thead>
		@foreach($muestras as $muestra)
		<tbody>
			<td>{{ $muestra->nombre }}</td>
			<td>{{ $muestra->descripcion }}</td>
			<td>{{ $muestra->presupuesto_id }}</td>
			<td>{{ $muestra->estado }}</td>
			<td>{{ $muestra->fecha_ingreso }}</td>
<<<<<<< HEAD
			



			<td>{!! link_to_route('muestras.edit', $title = 'Editar', $parameters = $muestra->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['muestras.destroy', $muestra->id], 'method' => 'DELETE']) !!}
=======
		


			<td>{!! link_to_route('muestra.edit', $title = 'Editar', $parameters = $muestra->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['muestra.destroy', $muestra->id], 'method' => 'DELETE']) !!}
>>>>>>> master
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $muestras->render() !!}

@stop
