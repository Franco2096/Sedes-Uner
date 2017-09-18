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
			{!! Form::select('solicitud_id', $solicitud, ['class' => 'form-control m-bot15']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('Usuario asociado: ') !!}
			{!! Form::text('usuario_id',$usuario, ['class' => 'form-control ','readonly']) !!}
		</div>

		