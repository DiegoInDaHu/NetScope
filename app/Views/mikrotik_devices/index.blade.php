@extends('layout')

@section('title','Dispositivos MikroTik')

@section('content')
<h1>Dispositivos MikroTik</h1>
<a href="{{ base_url('/mikrotik-devices/create') }}" class="btn btn-primary mb-3">Nuevo Dispositivo</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>DDNS</th>
            <th>Puerto</th>
            <th>Creado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($devices as $device)
        <tr>
            <td>{{ $device['id'] }}</td>
            <td>{{ $device['name'] }}</td>
            <td>{{ $device['ddns_hostname'] }}</td>
            <td>{{ $device['api_port'] }}</td>
            <td>{{ $device['created_at'] }}</td>
            <td>
                <a href="{{ base_url('/mikrotik-devices/edit/'.$device['id']) }}" class="btn btn-sm btn-secondary">Editar</a>
                <a href="{{ base_url('/mikrotik-devices/delete/'.$device['id']) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar dispositivo?');">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
