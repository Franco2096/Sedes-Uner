@extends('layouts.appMenu')

@section('tabla')
	<button type="button" class="btn btn-outline btn-info" onclick="history.go(-1); return false;">Volver</button>
	<div align="center">

			@include('alerts.request')
			{!! Form::open(['route' => 'determinaciones.store', 'method'=> 'POST']) !!}
			<h1><center>Alta de Determinación</center></h1>
				@include('determinaciones.forms.determinacion')
				<div class="pull-right">
					{!! Form::submit('Registrar',['class' => 'btn btn-success']) !!}
				</div>
			{!! Form::close() !!}

	</div>

@stop
