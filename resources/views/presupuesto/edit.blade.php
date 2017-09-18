@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">
			{!! Form::model($presupuesto,['route' =>['presupuestos.update', $presupuesto->id], 'method' => 'PUT']) !!}
			@include('users.forms.user')
			{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}



			{!! Form::open(['route' =>['presupuestos.destroy', $presupuesto->id], 'method' => 'DELETE']) !!}
			{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
		</div>
@stop
