<?php

require_once __DIR__ . "/../models/proveedor.php";

class ProveedorController
{
    public function index()
    {
        try {
            $proveedor = new Proveedor();
            $proveedores = $proveedor->getAll();

            require_once __DIR__ . "/../views/proveedor/index.php";

        } catch (Exception $e) {
            echo "Error en el controlador de proveedores: " . $e->getMessage();
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/proveedor/crear.php";
    }

    public function guardar()
    {
        $nombre = $_POST['nombre'];
        $nit = $_POST['nit'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $proveedor = new Proveedor();

        $resultado = $proveedor->guardar(
            $nombre,
            $nit,
            $telefono,
            $direccion
        );

        if ($resultado) {
            echo "Proveedor guardado correctamente.";
            $this->index();
        } else {
            echo "Error al guardar el proveedor.";
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $mProveedor = new Proveedor();
        $proveedor = $mProveedor->getById($id);

        if (!$proveedor) {
            echo "Proveedor no encontrado.";
            return;
        }

        require_once __DIR__ . "/../views/proveedor/editar.php";
    }

    public function actualizar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $nombre = $_POST['nombre'];
        $nit = $_POST['nit'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $proveedor = new Proveedor();

        $resultado = $proveedor->actualizar(
            $id,
            $nombre,
            $nit,
            $telefono,
            $direccion
        );

        if ($resultado) {
            echo "Proveedor actualizado correctamente.";
            $this->index();
        } else {
            echo "Error al actualizar el proveedor.";
        }
    }
}
?>
