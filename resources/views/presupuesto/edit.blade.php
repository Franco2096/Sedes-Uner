@extends('layouts.appMenu')

@section('tabla')
@include('alerts.request')

		<div class="col-md-6">
			{!! Form::model($presupuestos,['route' =>['presupuestos.update', $presupuestos->id], 'method' => 'PUT']) !!}
					<div class="form-group">
			{!! Form::label('Descripcion: ') !!}
			{!! Form::text('descripcion',null,['class' => 'form-control','placeholder'=> 'Ingresa la descripcion']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Estado: ') !!}
			{!! Form::select('estado', array('En_Espera' => 'En espera', 'Aprobado_por_Cliente' => 'Aprobado por el cliente' ,'Rechazado' => 'Rechazado'),null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Fecha de emision: ') !!}
			{!! Form::date('fecha_emision', \Carbon\Carbon::now()) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Solicitud asociada: ') !!}
			{!! Form::select('solicitud_id', $solicitud, $presupuestos->solicitud_id, ['class' => 'form-control m-bot15']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('Usuario asociado: ') !!}
			{!! Form::select('usuario_id',$usuario, $presupuestos->usuario_id,['class' => 'form-control ','readonly']) !!}
		</div>
			{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>
@stop
