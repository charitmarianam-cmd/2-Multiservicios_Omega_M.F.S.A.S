<?php

require_once __DIR__ . "/../../config/Database.php";

class Compras
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM compras";

        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll();
    }

    public function guardar($id_proveedor, $fecha, $total)
    {
        try {
            $sql = "INSERT INTO compras (id_proveedor, fecha, total)
                    VALUES (:id_proveedor, :fecha, :total)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id_proveedor", $id_proveedor);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al guardar la compra: " . $e->getMessage();

            return false;
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM compras WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);

            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            error_log("Error en getById de Compras: " . $e->getMessage());

            return false;
        }
    }

    public function actualizar($id, $id_proveedor, $fecha, $total)
    {
        try {
            $sql = "UPDATE compras
                    SET id_proveedor = :id_proveedor,
                        fecha = :fecha,
                        total = :total
                    WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->bindParam(":id_proveedor", $id_proveedor);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al actualizar la compra: " . $e->getMessage();

            return false;
        }
    }
}

?>
