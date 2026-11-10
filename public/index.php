<?php
// public/index.php

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');
if ($uri === '') {
    $uri = '/';
}

// 1. RUTA RAÍZ O LOGIN: Si está en la raíz, carga ÚNICAMENTE la vista de login sin barra de navegación
if ($uri === '/' || $uri === '/login') {
    $loginFile = __DIR__ . '/../app/views/auth/login.php';
    if (file_exists($loginFile)) {
        require_once $loginFile;
    } else {
        echo "<h1>Error</h1><p>No se encuentra la vista de login en <code>app/views/auth/login.php</code></p>";
    }
    exit;
}

// Cargar controladores necesarios solo para las secciones protegidas del sistema
require_once __DIR__ . '/../app/controllers/ProductoController.php';
require_once __DIR__ . '/../app/controllers/categoriaController.php';
require_once __DIR__ . '/../app/controllers/clienteController.php';
require_once __DIR__ . '/../app/controllers/proveedorController.php';
require_once __DIR__ . '/../app/controllers/compraController.php';
require_once __DIR__ . '/../app/controllers/ventaController.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiservicios Omega M.F.S.A.S - Panel</title>
    <link rel="stylesheet" href="/asset/css/styles.css">
</head>
<body>

<!-- Barra de Navegación (Visible ÚNICAMENTE dentro del sistema tras iniciar sesión) -->
<nav style="margin-bottom: 20px; background: #f8f9fa; padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
    <a href="/productos"><button>Productos</button></a>
    <a href="/productos/crear"><button>Crear Producto</button></a>

    <a href="/clientes"><button>Clientes</button></a>
    <a href="/clientes/crear"><button>Crear Cliente</button></a>

    <a href="/proveedores"><button>Proveedores</button></a>
    <a href="/proveedores/crear"><button>Crear Proveedor</button></a>

    <a href="/compras"><button>Compras</button></a>
    <a href="/compras/crear"><button>Crear Compra</button></a>

    <a href="/ventas"><button>Ventas</button></a>
    <a href="/ventas/crear"><button>Crear Venta</button></a>

    <a href="/categorias"><button>Categorías</button></a>
    <a href="/categorias/crear"><button>Crear Categoría</button></a>

    <!-- Botón de Cerrar Sesión con ID controlado por guard.js -->
    <a href="#" id="btn-logout" style="float: right;"><button type="button" style="background: #dc3545; color: white; cursor: pointer; border: none; padding: 5px 10px; border-radius: 4px;">Cerrar Sesión</button></a>
</nav>

<hr>

<?php
/* --- RUTAS PARA LISTAR (GET) --- */

if ($method === 'GET' && ($uri === "/cliente" || $uri === "/clientes")) {
    (new ClienteController())->index();
} elseif ($method === 'GET' && ($uri === "/producto" || $uri === "/productos")) {
    (new ProductoController())->index();
} elseif ($method === 'GET' && ($uri === "/categoria" || $uri === "/categorias")) {
    (new CategoriaController())->index();
} elseif ($method === 'GET' && ($uri === "/compra" || $uri === "/compras")) {
    (new CompraController())->index();
} elseif ($method === 'GET' && ($uri === "/proveedor" || $uri === "/proveedores")) {
    (new ProveedorController())->index();
} elseif ($method === 'GET' && ($uri === "/venta" || $uri === "/ventas")) {
    (new VentaController())->index();
}


/* --- RUTAS PARA MOSTRAR LOS FORMULARIOS (GET) --- */

elseif ($method === 'GET' && ($uri === "/categoria/crear" || $uri === "/categorias/crear")) {
    (new CategoriaController())->crear();
} elseif ($method === 'GET' && ($uri === "/cliente/crear" || $uri === "/clientes/crear")) {
    (new ClienteController())->crear();
} elseif ($method === 'GET' && ($uri === "/compra/crear" || $uri === "/compras/crear")) {
    (new CompraController())->crear();
} elseif ($method === 'GET' && ($uri === "/producto/crear" || $uri === "/productos/crear")) {
    (new ProductoController())->crear();
} elseif ($method === 'GET' && ($uri === "/proveedor/crear" || $uri === "/proveedores/crear")) {
    (new ProveedorController())->crear();
} elseif ($method === 'GET' && ($uri === "/venta/crear" || $uri === "/ventas/crear")) {
    (new VentaController())->crear();
}


/* --- RUTAS PARA GUARDAR DATOS (POST) --- */

elseif ($method === "POST" && ($uri === "/producto" || $uri === "/productos")) {
    (new ProductoController())->guardar();
} elseif ($method === "POST" && ($uri === "/proveedor" || $uri === "/proveedores")) {
    (new ProveedorController())->guardar();
} elseif ($method === "POST" && ($uri === "/venta" || $uri === "/ventas")) {
    (new VentaController())->guardar();
} elseif ($method === "POST" && ($uri === "/compra" || $uri === "/compras")) {
    (new CompraController())->guardar();
} elseif ($method === "POST" && ($uri === "/cliente" || $uri === "/clientes")) {
    (new ClienteController())->guardar();
} elseif ($method === "POST" && ($uri === "/categoria" || $uri === "/categorias")) {
    (new CategoriaController())->guardar();
}


/* --- RUTAS PARA EDITAR Y ACTUALIZAR --- */

elseif ($method === "GET" && ($uri === "/producto/editar" || $uri === "/productos/editar")) {
    (new ProductoController())->editar();
} elseif ($method === "POST" && ($uri === "/producto/editar" || $uri === "/producto/actualizar" || $uri === "/productos/actualizar")) {
    (new ProductoController())->actualizar();
}

elseif ($method === "GET" && ($uri === "/categoria/editar" || $uri === "/categorias/editar")) {
    (new CategoriaController())->editar();
} elseif ($method === "POST" && ($uri === "/categoria/editar" || $uri === "/categoria/actualizar" || $uri === "/categorias/actualizar")) {
    (new CategoriaController())->actualizar();
}

elseif ($method === "GET" && ($uri === "/cliente/editar" || $uri === "/clientes/editar")) {
    (new ClienteController())->editar();
} elseif ($method === "POST" && ($uri === "/cliente/editar" || $uri === "/cliente/actualizar" || $uri === "/clientes/actualizar")) {
    (new ClienteController())->actualizar();
}

elseif ($method === "GET" && ($uri === "/compra/editar" || $uri === "/compras/editar")) {
    (new CompraController())->editar();
} elseif ($method === "POST" && ($uri === "/compra/editar" || $uri === "/compra/actualizar" || $uri === "/compras/actualizar")) {
    (new CompraController())->actualizar();
}

elseif ($method === "GET" && ($uri === "/proveedor/editar" || $uri === "/proveedores/editar")) {
    (new ProveedorController())->editar();
} elseif ($method === "POST" && ($uri === "/proveedor/editar" || $uri === "/proveedor/actualizar" || $uri === "/proveedores/actualizar")) {
    (new ProveedorController())->actualizar();
}

elseif ($method === "GET" && ($uri === "/venta/editar" || $uri === "/ventas/editar")) {
    (new VentaController())->editar();
} elseif ($method === "POST" && ($uri === "/venta/editar" || $uri === "/venta/actualizar" || $uri === "/ventas/actualizar")) {
    (new VentaController())->actualizar();
}


/* --- RUTAS PARA ELIMINAR --- */

elseif ($method === 'POST' && ($uri === "/cliente/eliminar" || $uri === "/clientes/eliminar")) {
    (new ClienteController())->eliminar();
} elseif ($method === 'POST' && ($uri === "/categoria/eliminar" || $uri === "/categorias/eliminar")) {
    (new CategoriaController())->eliminar();
} elseif ($method === 'POST' && ($uri === "/compra/eliminar" || $uri === "/compras/eliminar")) {
    (new CompraController())->eliminar();
} elseif ($method === 'POST' && ($uri === "/producto/eliminar" || $uri === "/productos/eliminar")) {
    (new ProductoController())->eliminar();
} elseif ($method === 'POST' && ($uri === "/proveedor/eliminar" || $uri === "/proveedores/eliminar")) {
    (new ProveedorController())->eliminar();
} elseif ($method === 'POST' && ($uri === "/venta/eliminar" || $uri === "/ventas/eliminar")) {
    (new VentaController())->eliminar();
} 

/* --- MANEJO DE ERROR 404 --- */
else {
    http_response_code(404);
    echo "<h1>404 - Página no encontrada</h1><p>La ruta solicitada <code>" . htmlspecialchars($uri) . "</code> no existe en el sistema.</p>
          <br><a href='/productos'><button>Ir a Productos</button></a>";
}
?>

<!-- Scripts de Supabase, configuración, cliente y guardia de sesión (incluye signOut para el botón #btn-logout) -->
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script src="/asset/js/auth/config.js"></script>
<script src="/asset/js/auth/supabase-cliente.js"></script>
<script src="/asset/js/auth/guard.js"></script>
</body>
</html>