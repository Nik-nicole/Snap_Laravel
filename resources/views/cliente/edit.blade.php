
@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('cliente.update', $cliente) }}" method="POST">
					@csrf
					@method('PUT')
					<div class="col-md-4">
						<h3 class="text-success">Editar Datos</h3>

						<label class="form-control-label" for="nombre">Nombre:</label>
						<input type="text" class="form-control" id="nomre" name="nombre" value="{{ $cliente->nombre }}">
						@error('nombre')
						<small class="text-danger">{{ $message }}</small>
						@enderror

						<label class="form-control-label" for="apellido">Apellido:</label>
						<input type="text" class="form-control" id="apellido" name="apellido" value="{{ $cliente->apellido }}">
						@error('apellido')
						<small class="text-danger">{{ $message }}</small>
						@enderror

						<label class="form-control-label" for="documento">Documento:</label>
						<input type="text" class="form-control" id="documento" name="documento" value="{{ $cliente->documento }}">
						@error('documento')
						<small class="text-danger">{{ $message }}</small>
						@enderror

						<label class="form-control-label" for="telefono">Teléfono:</label>
						<input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}">
						@error('telefono')
						<small class="text-danger">{{ $message }}</small>
						@enderror

						<label class="form-control-label" for="correo">Correo:</label>
						<input type="text" class="form-control" id="correo" name="correo" value="{{ $cliente->correo }}">
						@error('correo')
						<small class="text-danger">{{ $message }}</small>
						@enderror

						<label class="form-control-label" for="password">Contraseña:</label>
						<input type="text" class="form-control" id="password" name="password" value="{{ $cliente->password }}">
						@error('password')
						<small class="text-danger">{{ $message }}</small>
						@enderror

						<label class="form-control-label" for="tipo">Tipo:</label>
						<input type="text" class="form-control" id="tipo" name="tipo" value="{{ $cliente->tipo }}">
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