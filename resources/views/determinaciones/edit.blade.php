@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">
			{!! Form::model($determinacion,['route' =>['determinaciones.update', $determinacion->id], 'method' => 'PUT']) !!}
			@include('determinaciones.forms.determinacion')

		<div class="col-md-6">
				{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
		</div>
		<div class="col-md-6">
			<a href="/determinaciones" class="btn btn-success">Atras </a>
		</div>
			{{-- {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::submit('Atras',['class' => 'btn btn-primary']) !!} --}}
			{!! Form::close() !!}
		</div>
@stop
