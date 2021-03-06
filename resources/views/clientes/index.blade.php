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
			 <a href="/clientes/create" class="btn btn-success nuevo" >Nuevo</a>
		</div>
		<div>
			<table class="table">
				<thead>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Dni</th>
					<th>Pais</th>
					<th>Provincia</th>
					<th>ciudad</th>
					<th>Direccion</th>
					<th>Email</th>
					<th>Empresa</th>
					<th>Estado</th>
					<th colspan="2"><center>Operaciones</center></th>
				</thead>
				@foreach($clientes as $cliente)
				<tbody>
					<td>{{ $cliente->nombre }}</td>
		            <td>{{ $cliente->apellido }}</td>
					<td>{{ $cliente->dni }}</td>
					<td>{{ $cliente->pais }}</td>
					<td>{{ $cliente->provincia }}</td>
					<td>{{ $cliente->ciudad }}</td>
					<td>{{ $cliente->direccion }}</td>
					<td>{{ $cliente->email }}</td>
					<td>{{ $cliente->empresa }}</td>
					<td>{{ $cliente->estado }}</td>
					<td>{!! link_to_route('clientes.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class' =>'btn btn-primary btn-xs' ]) !!}</td>
					<td>{!! Form::open(['route' =>['clientes.destroy', $cliente->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar',['class' => 'btn btn-danger btn-xs']) !!}
							{!! Form::close() !!}
					</td>
				</tbody>
				@endforeach
			</table>

			{!! $clientes->render() !!}
		</div>
	</div>



@stop
