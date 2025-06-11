@extends('layout')

@section('title','MikroTik Dashboard')

@section('content')
<h1>Estado de Dispositivos</h1>
<div class="row">
    @foreach($devices as $device)
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $device['name'] }}</h5>
                <p class="card-text">{{ $device['ddns_hostname'] }}</p>
                <p class="card-text">Estado:
                    <span class="badge {{ ($device['estado'] ?? 'Offline') === 'Online' ? 'bg-success' : 'bg-danger' }}">
                        {{ $device['estado'] ?? 'Offline' }}
                    </span>
                </p>
                <p class="card-text">Última actualización: {{ $device['ultima_actualizacion'] ?? '--' }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
