<?php 

require_once __DIR__ . "/../app/controllers/ProductoController.php"; 
require_once __DIR__ . "/../app/controllers/categoriaController.php"; 
require_once __DIR__ . "/../app/controllers/clienteController.php"; 
require_once __DIR__ . "/../app/controllers/proveedorController.php"; 
require_once __DIR__ . "/../app/controllers/compraController.php"; 
require_once __DIR__ . "/../app/controllers/ventaController.php"; 

$method = $_SERVER['REQUEST_METHOD']; 
$uri = $_SERVER['REQUEST_URI']; 


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

if ($method === 'GET' && ($uri === "/cliente" || $uri === "/clientes")){ 
    $clienteController = new ClienteController(); 
    $clienteController->index(); 
}   

if ($method === 'GET' && ($uri === "/producto" || $uri === "/productos")){ 
    $productoController = new ProductoController(); 
    $productoController->index(); 
}   

if ($method === 'GET' && ($uri === "/categoria" || $uri === "/categorias")){ 
    $categoriaController = new CategoriaController(); 
    $categoriaController->index(); 
}   

if ($method === 'GET' && ($uri === "/compra" || $uri === "/compras")){ 
    $compraController = new CompraController(); 
    $compraController->index(); 
}   

if ($method === 'GET' && ($uri === "/proveedor" || $uri === "/proveedores")){ 
    $proveedorController = new ProveedorController(); 
    $proveedorController->index(); 
}   

if ($method === 'GET' && ($uri === "/venta" || $uri === "/ventas")){ 
    $ventaController = new VentaController(); 
    $ventaController->index(); 
}


/* RUTAS PARA MOSTRAR LOS FORMULARIOS (GET) */

if ($method === 'GET' && ($uri === "/categoria/crear" || $uri === "/categorias/crear")){ 
    $categoriaController = new CategoriaController(); 
    $categoriaController->crear(); 
} 

if ($method === 'GET' && ($uri === "/cliente/crear" || $uri === "/clientes/crear")){ 
    $clienteController = new ClienteController(); 
    $clienteController->crear(); 
} 

if ($method === 'GET' && ($uri === "/compra/crear" || $uri === "/compras/crear")){ 
    $compraController = new CompraController(); 
    $compraController->crear(); 
} 

if ($method === 'GET' && ($uri === "/producto/crear" || $uri === "/productos/crear")){ 
    $productoController = new ProductoController(); 
    $productoController->crear(); 
} 

if ($method === 'GET' && ($uri === "/proveedor/crear" || $uri === "/proveedores/crear")){ 
    $proveedorController = new ProveedorController(); 
    $proveedorController->crear(); 
} 

if ($method === 'GET' && ($uri === "/venta/crear" || $uri === "/ventas/crear")){ 
    $ventaController = new VentaController(); 
    $ventaController->crear(); 
}


/* RUTAS PARA GUARDAR DATOS (POST) */

if ($method === "POST" && ($uri === "/producto" || $uri === "/productos")){
    $producto = new ProductoController();
    $producto->guardar();
}

if ($method === "POST" && ($uri === "/proveedor" || $uri === "/proveedores")){
    $proveedor = new ProveedorController();
    $proveedor->guardar();
}

if ($method === "POST" && ($uri === "/venta" || $uri === "/ventas")){
    $venta = new VentaController();
    $venta->guardar();
}

if ($method === "POST" && ($uri === "/compra" || $uri === "/compras")){
    $compra = new CompraController();
    $compra->guardar();
}

if ($method === "POST" && ($uri === "/cliente" || $uri === "/clientes")){
    $cliente = new ClienteController();
    $cliente->guardar();
}

if ($method === "POST" && ($uri === "/categoria" || $uri === "/categorias")){
    $categoria = new CategoriaController();
    $categoria->guardar();
}

?>

<?php

$ruta = parse_url($uri, PHP_URL_PATH);

if ($ruta === '/producto/editar' && $method === 'POST') {
    $productoController = new ProductoController();
    $productoController->editar();
}



?>