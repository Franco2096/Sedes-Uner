@extends('layouts.appMenu')

@section('tabla')
	@include('alerts.request')
<<<<<<< HEAD
	@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	 	{{ Session::get('message') }}
 	</div>
 	@endif
	{!! Form::open(['route' => 'muestras.store', 'method'=> 'POST']) !!}
		@include('muestras.forms.muestra')
=======
	{!! Form::open(['route' => 'muestras.store', 'method'=> 'POST']) !!}
		@include('muestras.forms.muestras')
>>>>>>> master
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}


@stop
