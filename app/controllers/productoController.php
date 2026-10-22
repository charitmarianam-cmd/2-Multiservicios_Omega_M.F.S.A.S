<?php

require_once __DIR__ . "/../models/producto.php";

class ProductoController
{
    public function index()
    {
        try {
            $producto = new Producto();
            $productos = $producto->getAll();

            require_once __DIR__ . "/../views/productos/index.php";

        } catch (Exception $e) {
            echo "Error en el controlador de productos: " . $e->getMessage();
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/productos/crear.php";
    }

    public function guardar()
    {
        $nombre = $_POST['nombre'] ?? '';
        $precio = $_POST['precio'] ?? '';
        $cantidad = $_POST['cantidad'] ?? '';
        $categoria = $_POST['categoria'] ?? '';

        if (
            $nombre === '' ||
            $precio === '' ||
            $cantidad === '' ||
            $categoria === ''
        ) {
            echo "Error: debes completar todos los campos.";
            return;
        }

        $producto = new Producto();

        $resultado = $producto->guardar(
            $nombre,
            $precio,
            $cantidad,
            $categoria
        );

        if ($resultado) {
            header("Location: /producto");
            exit;
        } else {
            echo "Error al guardar el producto.";
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            echo "ID de producto no válido.";
            return;
        }

        $mProducto = new Producto();
        $producto = $mProducto->getById($id);

        if (!$producto) {
            echo "Producto no encontrado.";
            return;
        }

        require_once __DIR__ . "/../views/productos/editar.php";
    }

    public function actualizar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $nombre = $_POST['nombre'] ?? '';
        $precio = $_POST['precio'] ?? '';
        $cantidad = $_POST['cantidad'] ?? '';
        $categoria = $_POST['categoria'] ?? '';

        if (
            !$id ||
            $nombre === '' ||
            $precio === '' ||
            $cantidad === '' ||
            $categoria === ''
        ) {
            echo "Error: debes completar todos los campos.";
            return;
        }

        $producto = new Producto();

        $resultado = $producto->actualizar(
            $id,
            $nombre,
            $precio,
            $cantidad,
            $categoria
        );

        if ($resultado) {
            header("Location: /producto");
            exit;
        } else {
            echo "Error al actualizar el producto.";
        }
    }
}
?>
