

	<table class="form-group" style="width: 500px" aling="center">
		<tr align="center">
			<th>
				{!! Form::label('Determinación: ') !!}
			</th>
			<td>
				{!! Form::text('determinacion',null,['class' => 'form-control','placeholder'=> 'Ingresa la determinacion']) !!}
			</td>
		</tr>
		<tr align="center">
			<th>
				{!! Form::label('Técnica: ') !!}
			</th>
			<td>
				{!! Form::text('tecnica',null,['class' => 'form-control','placeholder'=> 'Ingresa la determinacion']) !!}
			</td>
		</tr>
		<tr align="center">
			<th>
				{!! Form::label('Estado: ') !!}
			</th>
			<td>
			{!! Form::select('estado', array('habilitado' => 'habilitado', 'deshabilitado' => 'deshabilitado'),null,['class' => 'form-control']) !!}
			</td>
		</tr>
		<tr align="center">
			<th>
				{!! Form::label('Tipo de análisis: ') !!}
			</th>
			<td>
				{!! Form::select('tipo', array('fisico_quimico' => 'fisico_quimico', 'microbiologico' => 'microbiologico','tecnicas_especiales' => 'tecnicas_especiales'),null,['class' => 'form-control']) !!}
			</td>
		</tr>
	</table>
