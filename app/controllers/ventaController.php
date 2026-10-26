
<?php

require_once __DIR__ . "/../models/venta.php";

class VentaController
{
    public function index()
    {
        $venta = new Venta();
        $ventas = $venta->getAll();

        require_once __DIR__ . "/../views/ventas/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/ventas/crear.php";
    }

    public function guardar()
    {
        $id_cliente = $_POST['id_cliente'];
        $fecha = $_POST['fecha'];
        $total = $_POST['total'];

        $venta = new Venta();

        $resultado = $venta->guardar(
            $id_cliente,
            $fecha,
            $total
        );

        if ($resultado) {
            echo "Venta guardada correctamente.";
            $this->index();
        } else {
            echo "Error al guardar la venta.";
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            echo "ID de venta no válido.";
            return;
        }

        $mVenta = new Venta();
        $venta = $mVenta->getById($id);

        if (!$venta) {
            echo "Venta no encontrada.";
            return;
        }

        require_once __DIR__ . "/../views/ventas/editar.php";
    }

    public function actualizar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            echo "ID de venta no válido.";
            return;
        }

        $id_cliente = $_POST['id_cliente'];
        $fecha = $_POST['fecha'];
        $total = $_POST['total'];

        $venta = new Venta();

        $resultado = $venta->actualizar(
            $id,
            $id_cliente,
            $fecha,
            $total
        );

        if ($resultado) {
            header("Location: /venta");
            exit;
        } else {
            echo "Error al actualizar la venta.";
        }
    }

    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            echo "ID de venta no válido.";
            return;
        }

        $venta = new Venta();
        $resultado = $venta->eliminar($id);

        if ($resultado) {
            header("Location: /venta");
            exit;
        } else {
            echo "Error al eliminar la venta.";
        }
    }
}
?>
