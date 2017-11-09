@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

	<div class="center-block">
		<h1><center>Editar Determinación</center></h1>
		<div align="center">
			{!! Form::model($determinacion,['route' =>['determinaciones.update', $determinacion->id], 'method' => 'PUT']) !!}
			@include('determinaciones.forms.determinacion')
			<div class="pull-center">
				<a href="/determinaciones" class="btn btn-primary">Atras</a>

				{!! Form::submit('Actualizar',['class' => 'btn btn-success']) !!}
			</div>
		</div>
		{{-- {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
		{!! Form::submit('Atras',['class' => 'btn btn-primary']) !!} --}}
		{!! Form::close() !!}
	</div>

@stop
