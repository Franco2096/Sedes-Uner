@extends('layouts.appMenu')

@section('Abajobarra')
		@if(Session::has('message'))
			<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  {{ Session::get('message') }}
		 </div>
		@endif
@endsection


@section('tabla')
	<style >
		.nuevo{
			width: 200px;
		}
	</style>
<div class="panel-content">
	<div class="panel-heading">

		 <button type="button" class="btn btn-outline btn-info" onclick="history.go(-1); return false;">Volver</button>
	</div>
    <div >
		<table class="table table-hover">
			<thead>
				<th>Determinación</th>
				<th>Valor Determinacion</th>
				<th>Valor Servicio</th>
				<th>Valor Personal</th>
				<th>Total Presupuestado</th>
				<th></th>
			</thead>
			@foreach($determinaciones as $deter)
			<tbody>
				<td>{{$deter->determinacion}}</td>
				<td><center>{{ $deter->valorDeterminacion }}</center></td>
				<td><center>{{ $deter->valorServicio }}</center></td>
				<td><center>{{ $deter->valorPersonal }}</center></td>
				<td><center>{{ $deter->TotalPresupuestado }}</center></td>
			</tbody>
			@endforeach
		</table>
		<div><center>

		</center>
		</div>
    </div>
</div>


@stop
