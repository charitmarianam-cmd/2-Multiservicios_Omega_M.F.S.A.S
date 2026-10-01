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

        return $consulta->fetchAll();
    }

    public function guardar($id, $id_cliente, $fecha, $total)
    {
        try {
            $sql = "INSERT INTO ventas (id, cliente, fecha, total)
                    VALUES (:id, :cliente, :fecha, :total)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id);
            $consulta->bindParam(":id_cliente", $id_cliente);
            $consulta->bindParam(":fecha", $fecha);
            $consulta->bindParam(":total", $total);

            $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al guardar la venta: " . $e->getMessage();
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM ventas WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);

            $consulta->execute();

            return $consulta->fetch();

        } catch (PDOException $e) {

            error_log("Error en getById de Venta: " . $e->getMessage());

            return false;
        }
    }
}
