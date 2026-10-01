<?php

require_once __DIR__ . "/../../config/Database.php";

class Compra
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

    public function guardar($id, $id_proveedor, $fecha, $total)
    {
        try {
            $sql = "INSERT INTO compras (id, id_proveedor, fecha, total)
                    VALUES (:id, :id_proveedor, :fecha, :total)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id);
            $consulta->bindParam(":id_proveedor", $id_proveedor);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);

            $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al guardar la compra: " . $e->getMessage();
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM compras WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);

            $consulta->execute();

            return $consulta->fetch();

        } catch (PDOException $e) {

            error_log("Error en getById de Compra: " . $e->getMessage());

            return false;
        }
    }
}
?>

