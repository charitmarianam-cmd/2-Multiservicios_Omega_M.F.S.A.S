<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . "/../app/controllers/HomeController.php";

require_once dirname(__DIR__) . "/rutas/web.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

$enrutamiento = $rutas[$method][$ruta] ?? null;

if ($enrutamiento) {
    $controller = new $enrutamiento[0]();
    $metodo = $enrutamiento[1];
    $controller->$metodo();
} else {
    http_response_code(404);
    echo "Error 404 pagina no encontrada";
}

