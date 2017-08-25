		<div class="form-group">
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('nombre',null,['class' => 'form-control','placeholder'=> 'Ingresa nombre del usuario']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Descripcion: ') !!}
			{!! Form::text('descripcion',null,['class' => 'form-control','placeholder'=> 'Ingresa una descripcion del analisis']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Operativo: ') !!}
			{!! Form::select('operativo', array('Si' => 'SI', 'No' => 'NO'),null,['class' => 'form-control']) !!}
		</div>

		 <div class="form-group">
			{!! Form::label('precio: ') !!}
			{!! Form::text('precio',null,['class' => 'form-control','placeholder'=> 'Ingrese el precio del analisis']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Tipo de analisis: ') !!}
			{!! Form::select('tipo', array('Fisico_Quimico' => 'Fisico_Quimico', 'Microbiologico' => 'Microbiologico'),null,['class' => 'form-control']) !!}
		</div>
