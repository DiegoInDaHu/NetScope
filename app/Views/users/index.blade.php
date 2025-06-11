@extends('layout')

@section('title','Usuarios')

@section('content')
<h1>Lista de Usuarios</h1>
<a href="{{ base_url('/users/create') }}" class="btn btn-primary mb-3">Nuevo Usuario</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['nombre'] }}</td>
            <td>
                <a href="{{ base_url('/users/edit/'.$user['id']) }}" class="btn btn-sm btn-secondary">Editar</a>
                <a href="{{ base_url('/users/delete/'.$user['id']) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar usuario?');">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
