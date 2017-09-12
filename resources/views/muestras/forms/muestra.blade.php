
	
 		<div class="form-group"  style="width: 500px">
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('nombre', null,['class' => 'form-control','placeholder'=> 'Ingresa nombre de la muestra',"required"])  !!}

		</div>

	   <div class="form-group"  style="width: 300px">
			{!! Form::label('Descripcion: ') !!}
			{!! Form::text('descripcion',null,['class' => 'form-control','placeholder'=> 'Ingresa Descripcion',"required"]) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Presupuesto_id: ') !!}
			{!! Form::select('operativo', array('Si' => 'SI', 'No' => 'NO'),null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('estado: ') !!}
			{!! Form::select('estado', array('Guardada' => 'Guardada', 'Desechada' => 'Desechada'),null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('fecha_ingreso: ') !!}
			{!! Form::date('fecha_ingreso',null,['class' => 'form-control','placeholder'=> 'Ingresa la fecha de ingreso',"required"]) !!}
		</div>
		
	

