@extends('layouts.appMenu')

@section('tabla')
	@include('alerts.request')
	@include('presupuesto.forms.presupuesto')
	{{-- {!! Form::open(['route' => 'presupuestos.store', 'method'=> 'POST']) !!}

		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!} --}}


@stop
