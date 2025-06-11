@extends('layout')

@section('title','Editar Usuario')

@section('content')
<h1>Editar Usuario</h1>
<form method="post" action="{{ base_url('/users/update/'.$user['id']) }}">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $user['nombre'] }}" required>
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
