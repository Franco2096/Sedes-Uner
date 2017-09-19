@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')
				
		<div class="col-md-6">
			{!! Form::model($muestras,['route' =>['muestras.update', $muestras->id], 'method' => 'PUT']) !!}
			@include('muestras.forms.muestras')
			<div class="col-md-6">

			    <a href="/muestras" class="btn btn-primary">Regresar </a>
				{!! Form::submit('Actualizar',['class' => 'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}

		</div>

@stop
