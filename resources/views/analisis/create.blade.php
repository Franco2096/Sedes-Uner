@extends('layouts.appMenu')

@section('tabla')
		@include('alerts.request')
		{!! Form::open(['route' => 'analisis.store', 'method'=> 'POST']) !!}
		@include('analisis.forms.analisis')
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}


@stop
