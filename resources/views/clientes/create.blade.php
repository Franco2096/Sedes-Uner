@extends('layouts.appMenu')
@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ Session::get('message') }}
 </div>


@endif
@section('tabla')
	@include('alerts.request')
	<div class="center-block">
		<div class="container" >
			<button type="button" class="btn btn-outline btn-info" onclick="history.go(-1); return false;">Volver</button>
				{!! Form::open(['route' => 'clientes.store', 'method'=> 'POST']) !!}
				<h1><center>Alta de Cliente</center></h1>
					@include('clientes.forms.cliente')
					<div class="pull-right">
						{!! Form::submit('Registrar',['class' => 'btn btn-success btn-md',"onClick='verificar_campos()'"]) !!}
					</div>

				{!! Form::close() !!}
		</div>
	</div>

@stop
