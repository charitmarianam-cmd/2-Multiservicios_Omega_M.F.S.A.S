<?php

require_once __DIR__ . "/../models/cliente.php";

class ClienteController
{
    public function index()
    {
        try {
            $cliente = new Cliente();
            $clientes = $cliente->getAll();

            require_once __DIR__ . "/../views/clientes/index.php";

        } catch (Exception $e) {
            echo "Error en el controlador de clientes";
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/clientes/crear.php";
    }

    public function guardar()
    {
        $documento = $_POST['documento'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $ciudad = $_POST['ciudad'] ?? '';
        $direccion = $_POST['direccion'] ?? '';

        $cliente = new Cliente();

        $resultado = $cliente->guardar(
            $documento,
            $telefono,
            $ciudad,
            $direccion
        );

        if ($resultado) {
            // Redirección para recargar la ruta GET y mostrar la tabla con los datos
            header("Location: /taller_mvc/public/cliente");
            exit;
        } else {
            echo "Error al guardar el cliente.";
        }
    }
}

?>