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
            echo "Error en el controlador de proveedores";
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
        $proveedor->guardar($nombre, $nit, $telefono,$direccion);
        $resultado = $proveedor->guardar($nombre, $nit, $telefono,$direccion);

        if ($resultado) {
            echo "Proveedor guardado correctamente.";
             $this->index();
        } else {
            echo "Error al guardar el proveedor.";
        }
    }
}
