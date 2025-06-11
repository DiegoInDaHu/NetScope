@extends('layout')

@section('title','Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form method="post" action="{{ base_url('/login') }}">
            <div class="mb-3">
                <label for="nombre" class="form-label">Usuario</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
</div>
@endsection
