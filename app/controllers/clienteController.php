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


    public function guardar(){
        $documento=$_POST['documento'];
        $telefono=$_POST['telefono'];
        $ciudad=$_POST['ciudad'];
        $direccion=$_POST['direccion'];

        $cliente = new Cliente();
        $cliente->guardar($documento,$telefono,$ciudad,$direccion);
        $resultado = $cliente->guardar($documento,$telefono,$ciudad,$direccion);

        if ($resultado) {
            echo "Cliente guardado correctamente.";
            $this->index();
        } else {
            echo "Error al guardar la categoría.";
        }
    }

    
    }

?>
