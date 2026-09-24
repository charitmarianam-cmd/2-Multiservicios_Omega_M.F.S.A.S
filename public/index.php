<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/categoriaController.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/proveedorController.php";
require_once __DIR__ . "/../app/controllers/compraController.php";
require_once __DIR__ . "/../app/controllers/ventaController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri= $_SERVER['REQUEST_URI'];

?>
<a href="/cliente">cliente</a>
<a href="/producto">producto</a>
<a href="/categoria">categoria</a>
<a href="/compra">compra</a>
<a href="/proveedor">proveedor</a>
<a href="/venta">venta</a>

<?php

if ($method === 'GET' && $uri === "/cliente"){
    $clienteController = new clienteController();
    $clienteController->index();
} 
if ($method === 'GET' && $uri === "/producto"){
    $productoController = new productoController();
    $productoController->index();
} 

if ($method === 'GET' && $uri === "/categoria"){
    $categoriaController = new categoriaController();
    $categoriaController->index();
} 
if ($method === 'GET' && $uri === "/compra"){
    $compraController = new compraController();
    $compraController->index();
} 
if ($method === 'GET' && $uri === "/proveedor"){
    $proveedorController = new proveedorController();
    $proveedorController->index();
} 
if ($method === 'GET' && $uri === "/venta"){
    $ventaController = new ventaController();
    $ventaController->index();
} 
   
   


  
    








// 1. Vista de Productos
//$controllerProducto = new ProductoController();
//$controllerProducto->index();

// 2. Vista de Categorías
//$controllerCategoria = new CategoriaController();
//$controllerCategoria->index();

// 3. Vista de Clientes
//$controllerCliente = new ClienteController();
//$controllerCliente->index();

// 4. Vista de Proveedores
//$controllerProveedor = new ProveedorController();
//$controllerProveedor->index();

// 5. Vista de Compras
//$controllerCompra = new CompraController();
//$controllerCompra->index();

// 6. Vista de Ventas
//$controllerVenta = new VentaController();
//$controllerVenta->index();