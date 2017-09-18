		<div class="form-group"  style="width: 500px">
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('nombre',null,['class' => 'form-control','placeholder', 'required pattnern="[A-Za-z0-9]{5,40}'=> 'Ingresa nombre del usuario']) !!}
		</div>

	   <div class="form-group"  style="width: 300px">
			{!! Form::label('Descripcion: ') !!}
			{!! Form::text('descripcion',null,['class' => 'form-control','placeholder', '','required'=> 'Ingresa dni del cliente']) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Presupuesto_id: ') !!}
			{!! Form::text('presupuesto_id',null,['class' => 'form-control','placeholder', 'required pattnern="[A-Za-z0-9]{5,40}'=> 'Ingresa presupuesto']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Estado:  ') !!}
			{!! Form::select('estado', array('guardada' => 'Guardada', 'desechada' => 'Desechada'),null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('Fecha ingreso: ') !!}
			{!! Form::date('fecha_ingreso',null,['class' => 'datepicker','placeholder', 'required'=> 'Ingresa fecha de ingreso']) !!}
		</div>
		