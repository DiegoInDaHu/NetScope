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

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <button class="btn btn-menu" id="toggleMenu" data-bs-toggle="offcanvas" data-bs-target="#sidebar">&#9776;</button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title sidebar-brand" id="sidebarLabel">NetScope</h5>

            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a class="nav-link" href="{{ base_url('/') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ base_url('/users') }}">Usuarios</a></li>
            </ul>
        </div>
    </div>

    <div class="content container mt-3">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
