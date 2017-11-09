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

					{{-- {{ $pep = $solicitud }} --}}
					{{-- <td align='right'><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">Ver</button></td> --}}
					<td><button id="agendar" class="btn btn-success btn-xs"	data-target="#myModal" data-toggle="modal" data-id="{{$solicitud->tipo_servicio}}" href="#" class="sepV_a" title="agendar">Ver</button></td>

					<td>{!! Form::open(['route' =>['solicitud.destroy', $solicitud->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar',['class' => 'btn btn-danger btn-xs']) !!}
							{!! Form::close() !!}
					</td>


				</tbody>
				@endforeach



			</div>
			</table>
			{!! $solicitudes->render() !!}
		</div>

					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">

							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Descripción del Servicio</h4>
								</div>

								<div class="modal-body">
									<textarea class="form-group" name="bookId" id="bookId"  rows="8" cols="80" value="" readonly></textarea>
								</div>
								<div class="modal-footer">
				
									<button type="button" class="btn btn-danger btn-xs pull-left" data-dismiss="modal">Cerrar</button>
								</div>

							</div>
						</div>
	</div>


@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e){
		$('#myModal').on('show.bs.modal', function(e) {
		   var id = $(e.relatedTarget).data().id;
			$(e.currentTarget).find('#bookId').val(id);
		});
	  });
</script>
