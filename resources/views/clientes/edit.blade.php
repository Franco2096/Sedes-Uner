@extends('layouts.appMenu')
@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('message') }}
 </div>


@endif
@section('tabla')
@include('alerts.request')

		<div class="container">
			<h1><center>Editar Cliente</center></h1>
			{!! Form::model($clientes,['route' =>['clientes.update', $clientes->id], 'method' => 'PUT']) !!}
			@include('clientes.forms.cliente')
			<div class="pull-left">
			    <a href="/clientes" class="btn btn-primary">Regresar </a>
			</div>
			<div class="pull-right">
				{!! Form::submit('Actualizar',['class' => 'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>

@stop
