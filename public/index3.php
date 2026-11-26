<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../app/controllers/CategoriaController.php";

require_once dirname(__DIR__) . "/rutas/web.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

$enrutamiento = $rutas[$method][$ruta] ?? null;
?>

<a href="/productos">Producto</a>
<a href="/clientes">Cliente</a>
<a href="/categorias">Categoria</a>
<a href="/compras">Compra</a>
<a href="/proveedores">Proveedor</a>
<a href="/ventas">Venta</a>

<br><br>

<a href="/productos/crear">crearProducto</a>
<a href="/clientes/crear">crearCliente</a>
<a href="/categorias/crear">crearCategoria</a>
<a href="/compras/crear">crearCompra</a>
<a href="/proveedores/crear">crearProveedor</a>
<a href="/ventas/crear">crearVenta</a>

<?php

if ($enrutamiento) {
    $controller = new $enrutamiento[0]();
    $metodo = $enrutamiento[1];
    $controller->$metodo();
} else{
    echo "Error 404 pagina no encontrada";
}

?>