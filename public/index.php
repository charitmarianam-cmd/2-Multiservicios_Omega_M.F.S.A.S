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


<a href="/cliente/crear">crearCliente</a> 
<a href="/producto/crear">crearProducto</a> 
<a href="/categoria/crear">crearCategoria</a> 
<a href="/compra/crear">crearCompra</a> 
<a href="/proveedor/crear">crearProveedor</a> 
<a href="/venta/crear">crearVenta</a> 



<?php 

if ($method === 'GET' && $uri === "/cliente"){ 
    $clienteController = new ClienteController(); 
    $clienteController->index(); 
}  

if ($method === 'GET' && $uri === "/producto"){ 
    $productoController = new ProductoController(); 
    $productoController->index(); 
}  

if ($method === 'GET' && $uri === "/categoria"){ 
    $categoriaController = new CategoriaController(); 
    $categoriaController->index(); 
}  

if ($method === 'GET' && $uri === "/compra"){ 
    $compraController = new CompraController(); 
    $compraController->index(); 
}  

if ($method === 'GET' && $uri === "/proveedor"){ 
    $proveedorController = new ProveedorController(); 
    $proveedorController->index(); 
}  

if ($method === 'GET' && $uri === "/venta"){ 
    $ventaController = new VentaController(); 
    $ventaController->index(); 
}


/* RUTAS PARA MOSTRAR LOS FORMULARIOS */

if ($method === 'GET' && $uri === "/categoria/crear"){ 
    $categoriaController = new CategoriaController(); 
    $categoriaController->crear(); 
} 

if ($method === 'GET' && $uri === "/cliente/crear"){ 
    $clienteController = new ClienteController(); 
    $clienteController->crear(); 
} 

if ($method === 'GET' && $uri === "/compra/crear"){ 
    $compraController = new CompraController(); 
    $compraController->crear(); 
} 

if ($method === 'GET' && $uri === "/producto/crear"){ 
    $productoController = new ProductoController(); 
    $productoController->crear(); 
} 

if ($method === 'GET' && $uri === "/proveedor/crear"){ 
    $proveedorController = new ProveedorController(); 
    $proveedorController->crear(); 
} 

if ($method === 'GET' && $uri === "/venta/crear"){ 
    $ventaController = new VentaController(); 
    $ventaController->crear(); 
}




if($method === "POST" && $uri ==="/producto"){
    $producto = new ProductoController();
    $producto->guardar();
}

if($method === "POST" && $uri ==="/proveedor"){
    $proveedor = new ProveedorController();
    $proveedor->guardar();
}

if($method === "POST" && $uri ==="/venta"){
    $venta = new VentaController();
    $venta->guardar();
}

if($method === "POST" && $uri ==="/compra"){
    $compra = new CompraController();

    $compra->guardar();
}

if($method === "POST" && $uri ==="/cliente"){
    $cliente = new ClienteController();
    $cliente->guardar();
}

if($method === "POST" && $uri ==="/categoria"){
    $categoria = new CategoriaController();
    $categoria->guardar();
}

?>