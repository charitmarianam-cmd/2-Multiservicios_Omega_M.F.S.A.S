<?php

// Obtenemos la ruta raíz del proyecto de forma absoluta
define('ROOT_PATH', dirname(__DIR__));

// Cargamos el controlador desde la carpeta controllers
require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'ProductoController.php';

$controller = new ProductoController();
$controller->index();