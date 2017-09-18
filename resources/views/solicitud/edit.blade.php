@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">
			{!! Form::model($solicitud,['route' =>['solicitud.update', $solicitud->id], 'method' => 'PUT']) !!}
			<div class="form-group">
				{!! Form::label('Titulo: ') !!}
				{!! Form::text('titulo',null,['class' => 'form-control','placeholder'=> 'Ingresa Título']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('Descripcion: ') !!}
				{!! Form::textarea('descripcion',null,['class' => 'form-control','placeholder'=> 'Ingresa descripción de la solicitud']) !!}
			</div>
			<div>
			{!! Form::select('cliente_id', $cliente, $solicitud->cliente_id,['class' => 'form-control m-bot15']) !!}
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

