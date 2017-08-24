<div class="form-group">
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('name',null,['class' => 'form-control','placeholder'=> 'Ingresa nombre del usuario']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Email: ') !!}
			{!! Form::text('email',null,['class' => 'form-control','placeholder'=> 'Ingresa email del usuario']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Password: ') !!}
			{!! Form::password('password',['class' => 'form-control','placeholder'=> 'Ingresa la contraseña del usuario']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Tipo de Usuario: ') !!}
			{!! Form::select('tipoUser', array('Fisico_Quimico' => 'Fisico Quimico', 'Microbiologico' => 'Microbiologico' ,'Usuario_Comun' => 'Usuario Comun'),null,['class' => 'form-control']) !!}
		</div>
