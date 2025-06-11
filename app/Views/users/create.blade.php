@extends('layout')

@section('title','Nuevo Usuario')

@section('content')
<h1>Crear Usuario</h1>
<form method="post" action="{{ base_url('/users/store') }}">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
