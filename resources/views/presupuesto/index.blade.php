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
  <a href="/presupuestos/create" class="btn btn-success nuevo" >Nuevo</a>
	<table class="table">
		<thead>

			<th>Descripcion</th>
			<th>Estado</th>
			<th>Fecha de emision</th>
			<th>Solicitud Asociada</th>
			<th>Usuario asociado</th>
			<th>Operaciones</th>
			<th></th>
		</thead>
		@foreach($presupuestos as $presupuesto)
		<tbody>
			<td>{{ $presupuesto->descripcion }}</td>
			<td>{{ $presupuesto->estado }}</td>
			<td>{{ $presupuesto->fecha_emision }}</td>
			<td>{{ $presupuesto->titulo }}</td>
			<td>{{ $presupuesto->name }}</td>



			<td>{!! link_to_route('presupuestos.edit', $title = 'Editar', $parameters = $presupuesto->id, $attributes = ['class' =>'btn btn-primary' ]) !!}</td>
			<td>{!! Form::open(['route' =>['presupuestos.destroy', $presupuesto->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $presupuestos->render() !!}

@stop
