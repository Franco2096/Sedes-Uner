@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')
				
<<<<<<< HEAD
	@if(Session::has('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	 	{{ Session::get('message') }}
 	</div>
 	@endif
		<div class="col-md-6">
			{!! Form::model($muestras,['route' =>['muestras.update', $muestras->id], 'method' => 'PUT']) !!}
			@include('muestras.forms.muestra')
=======
		<div class="col-md-6">
			{!! Form::model($Muestra,['route' =>['muestras.update', $Muestra->id], 'method' => 'PUT']) !!}
			@include('muestras.forms.cliente')
>>>>>>> master
			<div class="col-md-6">

			    <a href="/muestras" class="btn btn-primary">Regresar </a>
				{!! Form::submit('Actualizar',['class' => 'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}

		</div>

@stop
