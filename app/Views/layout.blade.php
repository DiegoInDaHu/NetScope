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
            background-color: #001f3f;
            color: #fff;
        }
        .btn-menu {
            background-color: #001737;
            border-color: #001737;
        }
        .btn-menu:hover {
            background-color: #001326;
            border-color: #001326;
        }
        .offcanvas {
            background-color: #001f3f;
        }
        .offcanvas a {
            color: #fff;
        }
        .offcanvas a:hover {
            background-color: #001326;
        }
    </style>
</head>
<body>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Navegación</h5>

            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a class="nav-link text-white" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Dispositivos</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Configuración</a></li>
            </ul>
        </div>
    </div>

    <div class="content container mt-3">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
