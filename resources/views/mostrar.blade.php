<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="container p-4 bg-white shadow rounded">
        <h2 class="text-center">Datos Ingresados</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nombre:</strong> {{ $datos['nombre'] }}</li>
            <li class="list-group-item"><strong>Teléfono:</strong> {{ $datos['telefono'] }}</li>
            <li class="list-group-item"><strong>Dirección:</strong> {{ $datos['direccion'] }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $datos['email'] }}</li>
        </ul>
        <a href="/main" class="btn btn-secondary mt-3 w-100">Confirmar</a>
    </div>

</body>
</html>
