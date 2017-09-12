
	
 		<div class="form-group"  style="width: 500px">
			{!! Form::label('Nombre: ') !!}
			{!! Form::text('nombre', null,['class' => 'form-control','placeholder'=> 'Ingresa nombre del cliente',"required"])  !!}

		</div>

	   <div class="form-group"  style="width: 300px">
			{!! Form::label('Dni: ') !!}
			{!! Form::text('dni',null,['class' => 'form-control','placeholder'=> 'Ingresa dni del cliente',"required"]) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Provincia: ') !!}
			{!! Form::text('provincia',null,['class' => 'form-control','placeholder'=> 'Ingresa la provincia del cliente',"required"]) !!}
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('ciudad: ') !!}
			{!! Form::text('ciudad',null,['class' => 'form-control','placeholder'=> 'Ingresa la ciudad del cliente',"required"]) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('Direccion: ') !!}
			{!! Form::text('direccion',null,['class' => 'form-control','placeholder'=> 'Ingresa la direccion del cliente',"required"]) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('Email: ') !!}
			{!! Form::email('email',null,['class' => 'form-control','placeholder'=> 'Ingresa la email del cliente','required']) !!}
		</div>
	

