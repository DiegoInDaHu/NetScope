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
            color: #001f3f;
        }
        .btn-menu {
            background-color: #001f3f;
            border-color: #001f3f;
            color: #fff;
        }
        .btn-menu:hover {
            background-color: #001737;
            border-color: #001737;
        }
        .offcanvas {
            background-color: #fff;
            color: #001f3f;
        }
        .offcanvas a {
            color: #001f3f;
        }
        .offcanvas a:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <button class="btn btn-menu m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
        <span class="fs-4">&#9776;</span>
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Navegación</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Dispositivos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Configuración</a></li>
            </ul>
        </div>
    </div>

    <div class="content container mt-3">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
