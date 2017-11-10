@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')
		<table class="table-striped">
			{!! Form::model($solicitud,['route' =>['solicitud.update', $solicitud->id], 'method' => 'PUT']) !!}

			<div class="form-group">
				{!! Form::label('Título: ') !!}
				{!! Form::text('titulo',null,['class' => 'form-control','placeholder'=> 'Ingresa servicios']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Tipo de servicio: ') !!}
				{!! Form::textarea('tipo_servicio',null,['class' => 'form-control','placeholder'=> 'Ingresa servicios']) !!}
			</div>


			<div>
			{!! Form::select('cliente_id', $cliente, $solicitud->cliente_id,['class' => 'form-control m-bot15']) !!}
			</div>



			<div class="form-group">
				{!! Form::label('Fecha: ') !!}
				{!! Form::datetime('fecha', $solicitud->fecha )!!}
			</div>


				{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}

			<a href="/solicitud" class="btn btn-success">Atras </a>

			{{-- {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::submit('Atras',['class' => 'btn btn-primary']) !!} --}}
			{!! Form::close() !!}
		</table>



@stop
