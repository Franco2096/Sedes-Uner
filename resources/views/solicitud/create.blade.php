@extends('layouts.appMenu')

@section('tabla')
	<h1><center>Alta Solicitud</center></h1>
	@include('alerts.request')
	{!! Form::open(['route' => 'solicitud.store', 'method'=> 'POST']) !!}
		@include('solicitud.forms.solicitud')
		<div class="pull-right">
			{!! Form::submit('Registrar',['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}


@stop
