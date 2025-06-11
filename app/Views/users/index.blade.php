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
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['nombre'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
