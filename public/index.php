
<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/categoriaController.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/proveedorController.php";
require_once __DIR__ . "/../app/controllers/compraController.php";
require_once __DIR__ . "/../app/controllers/ventaController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

?>

<a href="/cliente">cliente</a>
<a href="/producto">producto</a>
<a href="/categoria">categoria</a>
<a href="/compra">compra</a>
<a href="/proveedor">proveedor</a>
<a href="/venta">venta</a>

<br><br>

<a href="/cliente/crear">crearCliente</a>
<a href="/producto/crear">crearProducto</a>
<a href="/categoria/crear">crearCategoria</a>
<a href="/compra/crear">crearCompra</a>
<a href="/proveedor/crear">crearProveedor</a>
<a href="/venta/crear">crearVenta</a>

<?php

/* RUTAS PARA LISTAR (GET) */

if ($method === 'GET' && ($ruta === "/cliente" || $ruta === "/clientes")) {
    $clienteController = new ClienteController();
    $clienteController->index();
    exit;
}

if ($method === 'GET' && ($ruta === "/producto" || $ruta === "/productos")) {
    $productoController = new ProductoController();
    $productoController->index();
    exit;
}

if ($method === 'GET' && ($ruta === "/categoria" || $ruta === "/categorias")) {
    $categoriaController = new CategoriaController();
    $categoriaController->index();
    exit;
}

if ($method === 'GET' && ($ruta === "/compra" || $ruta === "/compras")) {
    $compraController = new CompraController();
    $compraController->index();
    exit;
}

if ($method === 'GET' && ($ruta === "/proveedor" || $ruta === "/proveedores")) {
    $proveedorController = new ProveedorController();
    $proveedorController->index();
    exit;
}

if ($method === 'GET' && ($ruta === "/venta" || $ruta === "/ventas")) {
    $ventaController = new VentaController();
    $ventaController->index();
    exit;
}


/* RUTAS PARA MOSTRAR LOS FORMULARIOS (GET) */

if ($method === 'GET' && ($ruta === "/categoria/crear" || $ruta === "/categorias/crear")) {
    $categoriaController = new CategoriaController();
    $categoriaController->crear();
    exit;
}

if ($method === 'GET' && ($ruta === "/cliente/crear" || $ruta === "/clientes/crear")) {
    $clienteController = new ClienteController();
    $clienteController->crear();
    exit;
}

if ($method === 'GET' && ($ruta === "/compra/crear" || $ruta === "/compras/crear")) {
    $compraController = new CompraController();
    $compraController->crear();
    exit;
}

if ($method === 'GET' && ($ruta === "/producto/crear" || $ruta === "/productos/crear")) {
    $productoController = new ProductoController();
    $productoController->crear();
    exit;
}

if ($method === 'GET' && ($ruta === "/proveedor/crear" || $ruta === "/proveedores/crear")) {
    $proveedorController = new ProveedorController();
    $proveedorController->crear();
    exit;
}

if ($method === 'GET' && ($ruta === "/venta/crear" || $ruta === "/ventas/crear")) {
    $ventaController = new VentaController();
    $ventaController->crear();
    exit;
}


/* RUTAS PARA GUARDAR DATOS (POST) */

if ($method === "POST" && ($ruta === "/producto" || $ruta === "/productos")) {
    $productoController = new ProductoController();
    $productoController->guardar();
    exit;
}

if ($method === "POST" && ($ruta === "/proveedor" || $ruta === "/proveedores")) {
    $proveedorController = new ProveedorController();
    $proveedorController->guardar();
    exit;
}

if ($method === "POST" && ($ruta === "/venta" || $ruta === "/ventas")) {
    $ventaController = new VentaController();
    $ventaController->guardar();
    exit;
}

if ($method === "POST" && ($ruta === "/compra" || $ruta === "/compras")) {
    $compraController = new CompraController();
    $compraController->guardar();
    exit;
}

if ($method === "POST" && ($ruta === "/cliente" || $ruta === "/clientes")) {
    $clienteController = new ClienteController();
    $clienteController->guardar();
    exit;
}

if ($method === "POST" && ($ruta === "/categoria" || $ruta === "/categorias")) {
    $categoriaController = new CategoriaController();
    $categoriaController->guardar();
    exit;
}


/* RUTAS PARA EDITAR Y ACTUALIZAR PRODUCTOS */

if ($method === "GET" && $ruta === "/producto/editar") {
    $productoController = new ProductoController();
    $productoController->editar();
    exit;
}

if ($method === "POST" && $ruta === "/producto/editar") {
    $productoController = new ProductoController();
    $productoController->actualizar();
    exit;
}


/* RUTAS PARA EDITAR Y ACTUALIZAR CATEGORÍAS */

if ($method === "GET" && $ruta === "/categoria/editar") {
    $categoriaController = new CategoriaController();
    $categoriaController->editar();
    exit;
}

if ($method === "POST" && $ruta === "/categoria/editar") {
    $categoriaController = new CategoriaController();
    $categoriaController->actualizar();
    exit;
}


/* RUTAS PARA EDITAR Y ACTUALIZAR CLIENTES */

if ($method === "GET" && $ruta === "/cliente/editar") {
    $clienteController = new ClienteController();
    $clienteController->editar();
    exit;
}

if ($method === "POST" && $ruta === "/cliente/editar") {
    $clienteController = new ClienteController();
    $clienteController->actualizar();
    exit;
}


/* RUTAS PARA EDITAR Y ACTUALIZAR COMPRAS */

if ($method === "GET" && $ruta === "/compra/editar") {
    $compraController = new CompraController();
    $compraController->editar();
    exit;
}

if ($method === "POST" && $ruta === "/compra/editar") {
    $compraController = new CompraController();
    $compraController->actualizar();
    exit;
}


/* RUTAS PARA EDITAR Y ACTUALIZAR PROVEEDORES */

if ($method === "GET" && $ruta === "/proveedor/editar") {
    $proveedorController = new ProveedorController();
    $proveedorController->editar();
    exit;
}

if ($method === "POST" && $ruta === "/proveedor/editar") {
    $proveedorController = new ProveedorController();
    $proveedorController->actualizar();
    exit;
}


/* RUTAS PARA EDITAR Y ACTUALIZAR VENTAS */

if ($method === "GET" && $ruta === "/venta/editar") {
    $ventaController = new VentaController();
    $ventaController->editar();
    exit;
}

if ($method === "POST" && $ruta === "/venta/editar") {
    $ventaController = new VentaController();
    $ventaController->actualizar();
    exit;
}

?>
