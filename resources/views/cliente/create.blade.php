@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('cliente.store') }}" method="POST">
				@csrf
				<div class="col-md-4">
				<h3 class="text-success">Registrar Cliente</h3>

					<label for="nombre" class="form-control-label">Nombre:</label>
					<input type="text" class="form-control" id="nombre" name="nombre">
					@error('nombre')
					<small class="text-danger">{{ $message }}</small>
					@enderror

					<label for="apellido" class="form-control-label">Apellido:</label>
					<input type="text" class="form-control" id="apellido" name="apellido">
					@error('apellido')
					<small class="text-danger">{{ $message }}</small>
					@enderror

					<label for="documento" class="form-control-label">Documento:</label>
					<input type="text" class="form-control" id="documento" name="documento">
					@error('documento')
					<small class="text-danger">{{ $message }}</small>
					@enderror

					<label for="telefono" class="form-control-label">Teléfono:</label>
					<input type="text" class="form-control" id="telefono" name="telefono">
					@error('telefono')
					<small class="text-danger">{{ $message }}</small>
					@enderror

					<label for="correo" class="form-control-label">Correo:</label>
					<input type="text" class="form-control" id="correo" name="correo">
					@error('correo')
					<small class="text-danger">{{ $message }}</small>
					@enderror

					<label for="password" class="form-control-label">Contraseña:</label>
					<input type="text" class="form-control" id="password" name="password">
					@error('password')
					<small class="text-danger">{{ $message }}</small>
					@enderror

					<label for="tipo" class="form-control-label">Tipo:</label>
					<input type="text" class="form-control" id="tipo" name="tipo">
					@error('tipo')
					<small class="text-danger">{{ $message }}</small>
					@enderror
				</div>
				<br>
				<div class="col-md-4">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<a class="btn btn-secondary" href="{{ route('cliente.index') }}">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection