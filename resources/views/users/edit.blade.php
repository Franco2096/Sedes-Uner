@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">
			{!! Form::model($usuario,['route' =>['usuarios.update', $usuario->id], 'method' => 'PUT']) !!}
			@include('users.forms.user')
			<div class="col-md-6">
				{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			</div>
			<div class="col-md-6">
				<a href="/usuarios" class="btn btn-success">Atras </a>
			</div>
			{!! Form::close() !!}

		</div>

@stop
