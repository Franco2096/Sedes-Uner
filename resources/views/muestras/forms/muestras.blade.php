		<div class="form-group">  
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('nombre',null,['class' => 'form-control','placeholder', 'required pattnern="[A-Za-z0-9]{5,40}'=> 'Ingresa nombre de la muestra']) !!}
		</div>

	   <div class="form-group"   >
			{!! Form::label('Descripcion: ') !!}
			{!! Form::textarea ('descripcion',null,['class' => 'form-control','placeholder', '','required'=> 'Ingrese descripcion de la muestra']) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Presupuesto_id: ') !!}
			<div>
			{!! Form::select('presupuesto_id', $presupuesto, ['class' => 'form-control m-bot15']) !!}
		</div>
		</div>

		<div class="form-group">
			{!! Form::label('Estado:  ') !!}
			{!! Form::select('estado', array('guardada' => 'Guardada', 'desechada' => 'Desechada'),null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group"  >
			{!! Form::label('Fecha ingreso: ') !!}
			{!! Form::date('fecha_ingreso', \Carbon\Carbon::now()) !!}
		</div>
		