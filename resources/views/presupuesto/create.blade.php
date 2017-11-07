@extends('layouts.appMenu')

@section('tabla')
	@include('alerts.request')
	{!! Form::open(['route' => 'presupuestos.store', 'method'=> 'POST']) !!}
		@include('presupuesto.forms.presupuesto_create')
	{!! Form::close() !!}



@stop
	
