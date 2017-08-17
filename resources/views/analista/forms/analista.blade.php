<div class="form-group">
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('nombre',null,['class' => 'form-control','placeholder'=> 'Ingresa nombre del usuario']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Apellido: ') !!}
			{!! Form::text('apellido',null,['class' => 'form-control','placeholder'=> 'Ingresa apellido del usuario']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Correo: ') !!}
			{!! Form::text('email',null,['class' => 'form-control','placeholder'=> 'Ingresa correo del usuario']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('DNI: ') !!}
			{!! Form::text('dni',null,['class' => 'form-control','placeholder'=> 'Ingresa dni del usuario']) !!}
		</div>

		


		<div class="form-group">
			{!! Form::label('Operativo: ') !!}
			{!! Form::select('operativo', array('Si' => 'si', 'No' => 'no'),null,['class' => 'form-control']) !!}
		</div>