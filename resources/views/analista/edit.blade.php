@extends('layouts.admin')

@section('content')
@include('alerts.request')
	
		<div class="col-md-6">
			{!! Form::model($analista,['route' =>['analista.update', $analista->id], 'method' => 'PUT']) !!}
		@include('analista.forms.analista')
			{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}

			
		
			{!! Form::open(['route' =>['analista.destroy', $analista->id], 'method' => 'DELETE']) !!}
			{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}	
@stop