@extends('layouts.appMenu')

@section('tabla')
	@include('alerts.request')
	{!! Form::open(['route' => 'presupuestos.store', 'method'=> 'POST']) !!}
		@include('presupuesto.forms.presupuesto')
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}


@stop
