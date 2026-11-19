<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/categoriaController.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/proveedorController.php";
require_once __DIR__ . "/../app/controllers/compraController.php";
require_once __DIR__ . "/../app/controllers/ventaController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

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

switch ($uri) {
    case '/cliente':
    case '/clientes':
        if ($method === 'GET') {
            $cliente = new ClienteController();
            $cliente->index();
            exit;
        }
        if ($method === 'POST') {
            $cliente = new ClienteController();
            $cliente->guardar();
            exit;
        }
        break;

    case '/cliente/crear':
    case '/clientes/crear':
        if ($method === 'GET') {
            $cliente = new ClienteController();
            $cliente->crear();
            exit;
        }
        break;

    case '/cliente/editar':
        if ($method === 'GET') {
            $cliente = new ClienteController();
            $cliente->editar();
            exit;
        }
        if ($method === 'POST') {
            $cliente = new ClienteController();
            $cliente->actualizar();
            exit;
        }
        break;

    case '/cliente/eliminar':
        if ($method === 'POST') {
            $cliente = new ClienteController();
            $cliente->eliminar();
            exit;
        }
        break;

    case '/producto':
    case '/productos':
        if ($method === 'GET') {
            $producto = new ProductoController();
            $producto->index();
            exit;
        }
        if ($method === 'POST') {
            $producto = new ProductoController();
            $producto->guardar();
            exit;
        }
        break;

    case '/producto/crear':
    case '/productos/crear':
        if ($method === 'GET') {
            $producto = new ProductoController();
            $producto->crear();
            exit;
        }
        break;

    case '/producto/editar':
        if ($method === 'GET') {
            $producto = new ProductoController();
            $producto->editar();
            exit;
        }
        if ($method === 'POST') {
            $producto = new ProductoController();
            $producto->actualizar();
            exit;
        }
        break;

    case '/producto/eliminar':
        if ($method === 'POST') {
            $producto = new ProductoController();
            $producto->eliminar();
            exit;
        }
        break;

    case '/categoria':
    case '/categorias':
        if ($method === 'GET') {
            $categoria = new CategoriaController();
            $categoria->index();
            exit;
        }
        if ($method === 'POST') {
            $categoria = new CategoriaController();
            $categoria->guardar();
            exit;
        }
        break;

    case '/categoria/crear':
    case '/categorias/crear':
        if ($method === 'GET') {
            $categoria = new CategoriaController();
            $categoria->crear();
            exit;
        }
        break;

    case '/categoria/editar':
        if ($method === 'GET') {
            $categoria = new CategoriaController();
            $categoria->editar();
            exit;
        }
        if ($method === 'POST') {
            $categoria = new CategoriaController();
            $categoria->actualizar();
            exit;
        }
        break;

    case '/categoria/eliminar':
        if ($method === 'POST') {
            $categoria = new CategoriaController();
            $categoria->eliminar();
            exit;
        }
        break;

    case '/compra':
    case '/compras':
        if ($method === 'GET') {
            $compra = new CompraController();
            $compra->index();
            exit;
        }
        if ($method === 'POST') {
            $compra = new CompraController();
            $compra->guardar();
            exit;
        }
        break;

    case '/compra/crear':
    case '/compras/crear':
        if ($method === 'GET') {
            $compra = new CompraController();
            $compra->crear();
            exit;
        }
        break;

    case '/compra/editar':
        if ($method === 'GET') {
            $compra = new CompraController();
            $compra->editar();
            exit;
        }
        if ($method === 'POST') {
            $compra = new CompraController();
            $compra->actualizar();
            exit;
        }
        break;

    case '/compra/eliminar':
        if ($method === 'POST') {
            $compra = new CompraController();
            $compra->eliminar();
            exit;
        }
        break;

    case '/proveedor':
    case '/proveedores':
        if ($method === 'GET') {
            $proveedor = new ProveedorController();
            $proveedor->index();
            exit;
        }
        if ($method === 'POST') {
            $proveedor = new ProveedorController();
            $proveedor->guardar();
            exit;
        }
        break;

    case '/proveedor/crear':
    case '/proveedores/crear':
        if ($method === 'GET') {
            $proveedor = new ProveedorController();
            $proveedor->crear();
            exit;
        }
        break;

    case '/proveedor/editar':
        if ($method === 'GET') {
            $proveedor = new ProveedorController();
            $proveedor->editar();
            exit;
        }
        if ($method === 'POST') {
            $proveedor = new ProveedorController();
            $proveedor->actualizar();
            exit;
        }
        break;

    case '/proveedor/eliminar':
        if ($method === 'POST') {
            $proveedor = new ProveedorController();
            $proveedor->eliminar();
            exit;
        }
        break;

    case '/venta':
    case '/ventas':
        if ($method === 'GET') {
            $venta = new VentaController();
            $venta->index();
            exit;
        }
        if ($method === 'POST') {
            $venta = new VentaController();
            $venta->guardar();
            exit;
        }
        break;

    case '/venta/crear':
    case '/ventas/crear':
        if ($method === 'GET') {
            $venta = new VentaController();
            $venta->crear();
            exit;
        }
        break;

    case '/venta/editar':
        if ($method === 'GET') {
            $venta = new VentaController();
            $venta->editar();
            exit;
        }
        if ($method === 'POST') {
            $venta = new VentaController();
            $venta->actualizar();
            exit;
        }
        break;

    case '/venta/eliminar':
        if ($method === 'POST') {
            $venta = new VentaController();
            $venta->eliminar();
            exit;
        }
        break;

    default:
        http_response_code(404);
        echo "Ruta no encontrada";
        break;
}

