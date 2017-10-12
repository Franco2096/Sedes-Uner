@extends('layouts.appMenu')

@section('tabla')
		@include('alerts.request')
		{!! Form::open(['route' => 'determinaciones.store', 'method'=> 'POST']) !!}
		@include('determinaciones.forms.determinacion')
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}


@stop
