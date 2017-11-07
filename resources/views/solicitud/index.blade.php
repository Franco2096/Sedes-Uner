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
			<a href="/solicitud/create" class="btn btn-success nuevo" >Nuevo</a>
		</div>
		<div>
			<table class="table table-hover">
				<thead>
					<th>Título</th>
					<th>Tipo de servicio</th>
					<th>Cliente Solicitante</th>
					<th>Fecha</th>
					<th>Estado</th>
					<th colspan="2"><center>Acciones</center></th>
					<th></th>
				</thead>
				@foreach($solicitudes as $solicitud)
				<tbody>
					<td>{{ $solicitud->titulo }}</td>
					<td>{{ str_limit($solicitud->tipo_servicio, 20, ' (...)')}}</td>
					<td>{{($solicitud->apellidoCliente . ', ' . $solicitud->nombreCliente)}}</td>
					<td><center>{{ date('d, m, Y', strtotime($solicitud->fecha)) }}</center></td>
					<td>{{ $solicitud->estado }}</td>
					<td>{!! link_to_route('solicitud.edit', $title = 'Editar', $parameters = $solicitud->id, $attributes = ['class' =>'btn btn-primary btn-xs' ]) !!}</td>
					<td>{!! Form::open(['route' =>['solicitud.destroy', $solicitud->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar',['class' => 'btn btn-danger btn-xs']) !!}
							{!! Form::close() !!}
					</td>



				</tbody>
				@endforeach
			</table>
			{!! $solicitudes->render() !!}
		</div>
	</div>
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><center>Agregar determinación</center></h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<select class="selectpicker form-control" id="pro_id" name="pro_id" data-width='100%' required>
							<option value="" disabled selected>Seleccionar Determinación</option>

						</select>
					</div>
				</div>
				<div class="modal-footer">
					<!--Uso la funcion onclick para llamar a la funcion en javascript-->
					<button type="button" onclick="agregarProducto()" class="btn btn-success btn-sm" data-dismiss="modal">Agregar</button>
					<button type="button" class="btn btn-danger btn-sm pull-left" data-dismiss="modal">Cerrar</button>
				</div>
			</div>

		</div>
	</div>



@stop
