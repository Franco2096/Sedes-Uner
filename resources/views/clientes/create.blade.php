@extends('layouts.appMenu')

@section('tabla')
	@include('alerts.request')
	@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	 	{{ Session::get('message') }}
 	</div>
 	@endif

	{!! Form::open(['route' => 'clientes.store', 'method'=> 'POST']) !!}
		@include('clientes.forms.cliente')
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}


@stop
