		<div class="form-group"  style="width: 500px">
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('nombre',null,['class' => 'form-control',"id='nombre'", 'placeholder',"required"])!!}
		</div>

        <div class="form-group"  style="width: 500px">
			{!! Form::label('Apellido: ') !!}
			{!! Form::text('apellido',null,['class' => 'form-control',"id='apellido'", 'placeholder',"required"])!!}
		</div>

	    <div class="form-group"  style="width: 300px">
			{!! Form::label('Dni: ') !!}
			{!! Form::text('dni',null,['class' => 'form-control','placeholder','required'=> 'Ingresa dni del cliente']) !!}
		</div>

        <div class="form-group"  style="width: 500px">
			{!! Form::label('Pais: ') !!}
			{!! Form::text('pais',null,['class' => 'form-control',"id='pais'", 'placeholder',"required"])!!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Provincia: ') !!}
			{!! Form::text('provincia',null,['class' => 'form-control','placeholder' , 'required'=> 'Ingresa la provincia del cliente']) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('ciudad: ') !!}
			{!! Form::text('ciudad',null,['class' => 'form-control','placeholder' , 'required'=> 'Ingresa la ciudad del cliente']) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Direccion: ') !!}
			{!! Form::text('direccion',null,['class' => 'form-control','placeholder', 'required'=> 'Ingresa la direccion del cliente']) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('Email: ') !!}
			{!! Form::email('email',null,['class' => 'form-control','placeholder' ,'required'=> 'Ingresa la email del cliente']) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Empresa: ') !!}
			{!! Form::text('empresa',null,['class' => 'form-control',"id='empresa'", 'placeholder',"required"])!!}
		</div>

		<div class="form-group">
			{!! Form::label('Estado: ') !!}
			{!! Form::select('estado', array('Habilitado' => 'Habilitado', 'Deshabilitado' => 'Deshabilitado'),null,['class' => 'form-control']) !!}
		</div>

