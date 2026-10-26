
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
            echo "Error en el controlador de clientes: " . $e->getMessage();
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/clientes/crear.php";
    }

    public function guardar()
    {
        $documento = $_POST['documento'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];

        $cliente = new Cliente();

        $resultado = $cliente->guardar(
            $documento,
            $telefono,
            $ciudad,
            $direccion
        );

        if ($resultado) {
            echo "Cliente guardado correctamente.";
            $this->index();
        } else {
            echo "Error al guardar el cliente.";
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $mCliente = new Cliente();
        $cliente = $mCliente->getById($id);

        if (!$cliente) {
            echo "Cliente no encontrado.";
            return;
        }

        require_once __DIR__ . "/../views/clientes/editar.php";
    }

    public function actualizar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $documento = $_POST['documento'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];

        $cliente = new Cliente();

        $resultado = $cliente->actualizar(
            $id,
            $documento,
            $telefono,
            $ciudad,
            $direccion
        );

        if ($resultado) {
            echo "Cliente actualizado correctamente.";
            $this->index();
        } else {
            echo "Error al actualizar el cliente.";
        }
    }

    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            echo "ID de cliente no válido.";
            return;
        }

        $cliente = new Cliente();
        $resultado = $cliente->eliminar($id);

        if ($resultado) {
            header("Location: /cliente");
            exit;
        } else {
            echo "Error al eliminar el cliente.";
        }
    }
}
?>
