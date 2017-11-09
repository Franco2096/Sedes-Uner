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
		 <a href="/presupuestos/create" class="btn btn-success nuevo" >Nuevo</a>
	</div>
    <div >
		<table class="table table-hover">
			<thead>
				<th>Tipo servicio</th>
				<th>Fecha de presupuesto</th>
				<th>Fecha de solicitud</th>
				<th><center>Cliente</center></th>
				<th>Estado</th>
				<th>Total</th>
				<th colspan="2"><center>Operaciones</center></th>
				<th></th>
			</thead>
			@foreach($determinaciones as $deter)
			<tbody>
				<td>{{$deter->determinacion}}</td>
				<td><center>{{ $deter->valorDeterminacion }}</center></td>

			</tbody>
			@endforeach
		</table>
		<div><center>
				{!! $determinaciones->render() !!}
		</center>
		</div>
    </div>
</div>


@stop
