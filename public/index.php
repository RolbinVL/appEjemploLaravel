<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determinar si la aplicación está en modo de mantenimiento...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Registrar el cargador de clases de Composer...
require __DIR__.'/../vendor/autoload.php';

// Inicializar Laravel y manejar la solicitud...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// Manejar la solicitud y enviar la respuesta
$response = $app->handle(Request::capture());
$response->send();

// Terminar el ciclo de vida de la solicitud y la respuesta
$app->terminate(Request::capture(), $response);
