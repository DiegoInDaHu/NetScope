<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 200px;
            flex-shrink: 0;
            background-color: #f8f9fa;
        }
        .sidebar a {
            display: block;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #e9ecef;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav class="sidebar">
        <a href="#">Inicio</a>
        <a href="#">Dispositivos</a>
        <a href="#">Configuración</a>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
