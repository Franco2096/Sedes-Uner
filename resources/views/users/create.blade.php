@extends('layouts.appMenu')

@section('tabla')
	@include('alerts.request')
	{!! Form::open(['route' => 'usuarios.store', 'method'=> 'POST']) !!}
		@include('users.forms.user')
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}


@stop
