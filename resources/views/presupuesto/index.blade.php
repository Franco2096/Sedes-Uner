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
<div class="panel-content">
	<div class="panel-heading">
		 <a href="/presupuestos/create" class="btn btn-success nuevo" >Nuevo</a>
	</div>
    <div >
		<table class="table table-bordered">
			<thead>
				<th class="info"><center>Tipo servicio</center></th>
				<th class="info"><center>Fecha de presupuesto</center></th>
				<th class="info"><center>Fecha de solicitud</center></th>
				<th class="info"><center>Cliente</center></th>
				<th class="info"><center>Estado</center></th>
				<th class="info"><center>Total</center></th>
				<th class="info"><center>Operaciones</center></th>
			</thead>
			@foreach($presupuestos as $presupuesto)
			<tbody>
				<td>{{  str_limit($presupuesto->tipo_servicio, 20, ' (...)')}}</td>
				<td><center>{{ date('d, m, Y', strtotime($presupuesto->fecha_presupuesto)) }}</center></td>
				<td><center>{{ date('d, m, Y', strtotime($presupuesto->fecha_solicitud)) }}</center></td>
				<td>{{($presupuesto->apellidoCliente . ', ' . $presupuesto->nombreCliente)}}</td>

				@if ($presupuesto->estado == 'En_Espera')
				<td> En espera </td>
				@elseif ($presupuesto->estado == 'Aprobado_por_Cliente')
					<td> Aprobado por el cliente </td>
				@else
					<td> Rechazado </td>
				@endif

				<td>{{ $presupuesto->totalPresupuesto }}</td>

				<td>{!! link_to_route('presupuestos.show', $title = 'Ver detalles', $parameters = $presupuesto->id, $attributes = ['class' =>'btn btn-success btn-xs' ]) !!}</td>

			</tbody>
			@endforeach
		</table>
		<div><center>
				{!! $presupuestos->render() !!}
		</center>
		</div>
    </div>
</div>


@stop
