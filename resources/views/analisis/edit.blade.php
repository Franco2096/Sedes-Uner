@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">
			{!! Form::model($analisis,['route' =>['analisis.update', $analisis->id], 'method' => 'PUT']) !!}
			@include('analisis.forms.analisis')

		<div class="col-md-6">
				{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
		</div>
		<div class="col-md-6">
			<a href="/analisis" class="btn btn-success">Atras </a>
		</div>
			{{-- {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::submit('Atras',['class' => 'btn btn-primary']) !!} --}}
			{!! Form::close() !!}
		</div>
@stop
