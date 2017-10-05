

<div class="form-group">
	{!! Form::label('Título de la solicitud: ') !!}
	{!! Form::text('titulo',null,['class' => 'form-control','placeholder'=> 'Ingresar Título']) !!}
</div>

<div class="form-group">
	{!! Form::label('Tipo de servicio: ') !!}
	{!! Form::textarea('tipo_servicio',null,['class' => 'form-control','placeholder'=> 'Ingresa servicios']) !!}
</div>



<div>
{!! Form::select('cliente_id', $cliente, 'id', ['class' => 'form-control m-bot15']) !!}
</div>


<div class="form-group">
	{!! Form::label('Fecha: ') !!}
	{!! Form::date('fecha', \Carbon\Carbon::now()) !!}
</div>
