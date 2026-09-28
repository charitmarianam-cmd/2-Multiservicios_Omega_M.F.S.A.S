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
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            require_once __DIR__ . "/../views/proveedor/crear.php";
        }
    }
}
