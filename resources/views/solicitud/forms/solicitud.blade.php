<div class="form-group">
	{!! Form::label('Titulo: ') !!}
	{!! Form::text('titulo',null,['class' => 'form-control','placeholder'=> 'Ingresa Título']) !!}
</div>

<div class="form-group">
	{!! Form::label('Estado: ') !!}
	{!! Form::select('tipoEstado', array('En espera' => 'En espera'),null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Descripcion: ') !!}
	{!! Form::textarea('descripcion',null,['class' => 'form-control','placeholder'=> 'Ingresa descripción de la solicitud']) !!}
</div>
<div>
{!! Form::select('cliente_id', $cliente->pluck('nombre'), ['class' => 'form-control m-bot15']) !!}
</div>