<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background-color: #fff;
            color: #000;
        }
        .btn-menu {
            background-color: #001737;
            border-color: #001737;
            color: #fff;
        }
        .btn-menu:hover {
            background-color: #001326;
            border-color: #001326;
        }
        .offcanvas {
            background-color: #fff;
        }
        .offcanvas a {
            color: #0d6efd;
        }
        .offcanvas a:hover {
            background-color: #e9ecef;
        }
        .sidebar-brand {
            font-family: "Georgia", serif;
            font-weight: bold;
            color: #0d6efd;
        }
    </style>
</head>
<body>

    @php
        $session = session();
        $uri     = service('uri');
    @endphp
    <nav class="navbar bg-light">
        <div class="container-fluid d-flex">
            @if ($uri->getPath() !== 'login')
                <button class="btn btn-menu" id="toggleMenu" data-bs-toggle="offcanvas" data-bs-target="#sidebar">&#9776;</button>
            @endif
            @if($session->get('user_id'))
                <div class="dropdown ms-auto">
                    <button class="btn btn-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $session->get('user_name') }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="{{ base_url('/logout') }}">Cerrar sesión</a></li>
                    </ul>
                </div>
            @endif
        </div>
    </nav>

    @if ($uri->getPath() !== 'login')
        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title sidebar-brand" id="sidebarLabel">NetScope</h5>

                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                @php $session = session(); @endphp
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item"><a class="nav-link" href="{{ base_url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ base_url('/users') }}">Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ base_url('/mikrotik-devices') }}">MikroTik</a></li>
                    @if($session->get('user_id'))
                        {{-- El cierre de sesión se muestra en el encabezado --}}
                    @endif
                </ul>
            </div>
        </div>
    @endif

    <div class="content container mt-3">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
