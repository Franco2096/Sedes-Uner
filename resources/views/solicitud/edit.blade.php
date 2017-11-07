@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">

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
				{!! Form::datetime('fecha', \Carbon\Carbon::now()) !!}
			</div>

		<div class="col-md-6">
				{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
		</div>
		<div class="col-md-6">
			<a href="/solicitud" class="btn btn-success">Atras </a>
		</div>
			{{-- {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::submit('Atras',['class' => 'btn btn-primary']) !!} --}}
			{!! Form::close() !!}
		</div>
@stop
