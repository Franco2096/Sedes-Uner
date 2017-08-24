<div class="form-group">
	{!! Form::label('Titulo: ') !!}
	{!! Form::text('titulo',null,['class' => 'form-control','placeholder'=> 'Ingresa Título']) !!}
</div>

<div class="form-group">
	{!! Form::label('Estado: ') !!}
	{!! Form::select('tipoEstado', array('En espera' => 'En espera', 'Atendida' => 'Atendida'),null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Descripcion: ') !!}
	{!! Form::textarea('descripcion',null,['class' => 'form-control','placeholder'=> 'Ingresa descripción de la solicitud']) !!}
</div>

<!--<div class="form-group">
	{--!! Form::label('Cliente solicitante: ') !!--}
	{--!! Form::select('clientes', array_pluck(Clientes::all(), 'nombre', 'id')); !!--}
</div>-->
