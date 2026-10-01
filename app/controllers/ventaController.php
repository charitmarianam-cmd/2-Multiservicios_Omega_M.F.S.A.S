<?php

require_once __DIR__ . "/../models/venta.php";

class VentaController
{
    public function index()
    {
        try {
            $venta = new Venta();
            $ventas = $venta->getAll();

            require_once __DIR__ . "/../views/ventas/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de ventas";
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/ventas/crear.php";
    }


    public function guardar()
    {
        $id = $_POST['id'];
        $id_cliente = $_POST['id_cliente'];
        $fecha = $_POST['fecha'];
        $total = $_POST['total'];


        $venta = new Venta();
        $venta->guardar($id, $id_cliente, $fecha, $total);
        $resultado = $venta->guardar($id, $id_cliente, $fecha, $total);

        if ($resultado) {
            echo "venta guardada correctamente.";
            $this->index();
        } else {
            echo "Error al guardar la categoría.";
        }
    }
}
