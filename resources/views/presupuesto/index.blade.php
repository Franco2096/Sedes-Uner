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

			<th>Tipo_servicio</th>
			<th>Fecha de presupuesto</th>
			<th>Fecha de solicitud</th>
			<th>Cliente</th>
			<th>Estado</th>
			<th>Total</th>
			<th>Operaciones</th>
			<th></th>
		</thead>
		@foreach($presupuestos as $presupuesto)
		<tbody>
			<td>{{ $presupuesto->tipo_servicio }}</td>
			<td>{{ $presupuesto->fecha_presupuesto }}</td>
			<td>{{ $presupuesto->fecha_solicitud }}</td>
			<td>{{ $presupuesto->nombreCliente }}</td>
			@if ($presupuesto->estado == 'En_Espera')
			<td> En espera </td>
			@elseif ($presupuesto->estado == 'Aprobado_por_Cliente')
				<td> Aprobado por el cliente </td>
			@else
				<td> Rechazado </td>
			@endif



			<td>{{ $presupuesto->totalPresupuesto }}</td>



			<td>{!! link_to_route('presupuestos.show', $title = 'Ver', $parameters = $presupuesto->id, $attributes = ['class' =>'btn btn-success' ]) !!}</td>
			<td>{!! Form::open(['route' =>['presupuestos.destroy', $presupuesto->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
			</td>




		</tbody>
		@endforeach
	</table>

	{!! $presupuestos->render() !!}

@stop
