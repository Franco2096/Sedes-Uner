		<div class="form-group">
			{!! Form::label('determinacion: ') !!}
			{!! Form::text('determinacion',null,['class' => 'form-control','placeholder'=> 'Ingresa la determinacion']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tecnica: ') !!}
			{!! Form::text('tecnica',null,['class' => 'form-control','placeholder'=> 'Ingresa la determinacion']) !!}
		</div>



		<div class="form-group">
			{!! Form::label('Estado: ') !!}
			{!! Form::select('estado', array('habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'),null,['class' => 'form-control']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('Tipo de analisis: ') !!}
			{!! Form::select('tipo', array('fisico_quimico' => 'fisico_quimico', 'microbiologico' => 'microbiologico','tecnicas_especiales' => 'tecnicas_especiales'),null,['class' => 'form-control']) !!}
		</div>
