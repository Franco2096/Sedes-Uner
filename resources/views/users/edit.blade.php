@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">
			{!! Form::model($usuario,['route' =>['usuarios.update', $usuario->id], 'method' => 'PUT']) !!}
			@include('users.forms.user')
			{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}



			{!! Form::open(['route' =>['usuarios.destroy', $usuario->id], 'method' => 'DELETE']) !!}
			{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
		</div>
@stop
