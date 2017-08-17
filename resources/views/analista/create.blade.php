@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	{!! Form::open(['route' => 'analista.store', 'method'=> 'POST']) !!}
		@include('analista.forms.analista')
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
	
	
@stop