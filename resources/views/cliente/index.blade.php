@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	<div class="col-md-6">
		<h2 class="text-success">CRUD Clientes</h2>
	</div>
</div>

	<div class="col-md-6">
		<div align="right">
			<a href="{{ route('cliente.create') }}" class="btn btn-primary">Agregar</a>
		</div>
	</div>
	<br>
	@if(sizeof($cliente) > 0)
	<table class="table" style="width: 1000px">
		<thead>
			<tr>
				<th>Código</th>			
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Documento</th>
				<th>Teléfono</th>
				<th>Correo</th>
				<th>Contraseña</th>
				<th>Tipo</th>
				<th class="text-center" width="20%">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cliente as $cliente)			
				<tr>
					<td>{{$cliente->id}}</td>
					<td>{{$cliente->nombre}}</td>
					<td>{{$cliente->apellido}}</td>
					<td>{{$cliente->documento}}</td>
					<td>{{$cliente->telefono}}</td>
					<td>{{$cliente->correo}}</td>
					<td>{{$cliente->password}}</td>
					<td>{{$cliente->tipo}}</td>
					<td align="center">
						<a href="{{ route('cliente.edit', $cliente) }}" class="btn btn-success">Editar</a>
						<form action=" {{ route('cliente.destroy', $cliente) }} "  method="POST" class="d-incline-block">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger"
						onclick="return confirm('¿Está seguro de eliminar el registro?')">Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@else
		<div class="alert alert-secondary"><h3>No se encontrarón Registros</h3></div>
	@endif
</div>																	
@endsection