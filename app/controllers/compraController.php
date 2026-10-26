<?php

require_once __DIR__ . "/../models/compra.php";

class CompraController
{
    public function index()
    {
        try {
            $compra = new Compras();
            $compras = $compra->getAll();

            require_once __DIR__ . "/../views/compra/index.php";

        } catch (Exception $e) {
            echo "Error en el controlador de compras";
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/compra/crear.php";
    }

    public function guardar()
    {
        $id_proveedor = $_POST['id_proveedor'];
        $fecha = $_POST['fecha'];
        $total = $_POST['total'];

        $compra = new Compras();

        $resultado = $compra->guardar(
            $id_proveedor,
            $fecha,
            $total
        );

        if ($resultado) {
            echo "Compra guardada correctamente.";
            $this->index();

        } else {
            echo "Error al guardar la compra.";
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $mCompra = new Compras();
        $compra = $mCompra->getById($id);

        if (!$compra) {
            echo "Compra no encontrada";
            return;
        }

        require_once __DIR__ . "/../views/compra/editar.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $id_proveedor = $_POST['id_proveedor'];
        $fecha = $_POST['fecha'];
        $total = $_POST['total'];

        $compra = new Compras();

        $resultado = $compra->actualizar(
            $id,
            $id_proveedor,
            $fecha,
            $total
        );

        if ($resultado) {
            echo "Compra actualizada correctamente.";
            $this->index();

        } else {
            echo "Error al actualizar la compra.";
        }
    }
    
    
public function eliminar()
{
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

    if (!$id) {
        echo "ID de compra no válido.";
        return;
    }

    $compra = new Compras();
    $resultado = $compra->eliminar($id);

    if ($resultado) {
        header("Location: /compra");
        exit;
    } else {
        echo "Error al eliminar la compra.";
    }
}

}

?>
