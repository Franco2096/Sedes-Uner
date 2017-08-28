		<div class="form-group"  style="width: 500px">
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('nombre',null,['class' => 'form-control','placeholder'=> 'Ingresa nombre del usuario']) !!}
		</div>

	   <div class="form-group"  style="width: 300px">
			{!! Form::label('Dni: ') !!}
			{!! Form::number('dni',null,['class' => 'form-control','placeholder'=> 'Ingresa dni del cliente']) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Provincia: ') !!}
			{!! Form::text('provincia',null,['class' => 'form-control','placeholder'=> 'Ingresa la provincia del cliente']) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('ciudad: ') !!}
			{!! Form::text('ciudad',null,['class' => 'form-control','placeholder'=> 'Ingresa la ciudad del cliente']) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('Direccion: ') !!}
			{!! Form::text('direccion',null,['class' => 'form-control','placeholder'=> 'Ingresa la direccion del cliente']) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('Email: ') !!}
			{!! Form::email('email',null,['class' => 'form-control','placeholder'=> 'Ingresa la email del cliente']) !!}
		</div>
