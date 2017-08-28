@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')
				
		<div class="col-md-6">
			{!! Form::model($clientes,['route' =>['clientes.update', $clientes->id], 'method' => 'PUT']) !!}
			@include('clientes.forms.cliente')
			<div class="col-md-6">

			    <a href="/clientes" class="btn btn-primary">Regresar </a>
				{!! Form::submit('Actualizar',['class' => 'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}

		</div>

@stop
