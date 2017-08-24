@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">
			{!! Form::model($analisis,['route' =>['analisis.update', $analisis->id], 'method' => 'PUT']) !!}
			@include('users.forms.user')
			{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}



			{!! Form::open(['route' =>['analisis.destroy', $analisis->id], 'method' => 'DELETE']) !!}
			{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
		</div>
@stop
