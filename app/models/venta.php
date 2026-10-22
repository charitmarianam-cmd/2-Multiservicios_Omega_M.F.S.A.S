<?php

require_once __DIR__ . "/../../config/Database.php";

class Venta
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM ventas";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($id_cliente, $fecha, $total)
    {
        try {
            $sql = "INSERT INTO ventas (id_cliente, fecha, total)
                    VALUES (:id_cliente, :fecha, :total)";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id_cliente", $id_cliente);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al guardar la venta: " . $e->getMessage();
            return false;
        }
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM ventas WHERE id = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(":id", $id, PDO::PARAM_INT);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_OBJ);
    }

    public function actualizar($id, $id_cliente, $fecha, $total)
    {
        try {
            $sql = "UPDATE ventas
                    SET id_cliente = :id_cliente,
                        fecha = :fecha,
                        total = :total
                    WHERE id = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->bindParam(":id_cliente", $id_cliente);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al actualizar la venta: " . $e->getMessage();
            return false;
        }
    }
}
?>
