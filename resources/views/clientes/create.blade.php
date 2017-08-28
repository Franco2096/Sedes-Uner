@extends('layouts.appMenu')

@section('tabla')
	@include('alerts.request')
	{!! Form::open(['route' => 'clientes.store', 'method'=> 'POST']) !!}
		@include('clientes.forms.cliente')
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}


@stop
