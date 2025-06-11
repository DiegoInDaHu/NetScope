@extends('layout')

@section('title','Editar Dispositivo')

@section('content')
<h1>Editar Dispositivo MikroTik</h1>
<form method="post" action="{{ base_url('/mikrotik-devices/update/'.$device['id']) }}">
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $device['name'] }}" required>
    </div>
    <div class="mb-3">
        <label for="ddns_hostname" class="form-label">DDNS</label>
        <input type="text" name="ddns_hostname" id="ddns_hostname" class="form-control" value="{{ $device['ddns_hostname'] }}" required>
    </div>
    <div class="mb-3">
        <label for="api_port" class="form-label">Puerto API</label>
        <input type="number" name="api_port" id="api_port" class="form-control" value="{{ $device['api_port'] }}" required>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" name="username" id="username" class="form-control" value="{{ $device['username'] }}" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control" value="{{ $device['password'] }}" required>
    </div>
    <div class="mb-3">
        <label for="notes" class="form-label">Notas</label>
        <textarea name="notes" id="notes" class="form-control">{{ $device['notes'] }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
