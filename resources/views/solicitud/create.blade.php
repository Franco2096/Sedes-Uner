@extends('layouts.appMenu')

@section('tabla')
	@include('alerts.request')
	{!! Form::open(['route' => 'solicitud.store', 'method'=> 'POST']) !!}
		@include('solicitud.forms.solicitud')
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}


@stop
