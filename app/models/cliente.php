<?php

require_once __DIR__ . "/../../config/Database.php";

class Cliente
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM clientes";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll();
    }

    public function guardar($documento, $telefono, $ciudad, $direccion)
    {
        try {
            $sql = "INSERT INTO clientes
                    (documento, telefono, ciudad, direccion)
                    VALUES
                    (:documento, :telefono, :ciudad, :direccion)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":documento", $documento);
            $consulta->bindParam(":telefono", $telefono);
            $consulta->bindParam(":ciudad", $ciudad);
            $consulta->bindParam(":direccion", $direccion);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al guardar el cliente: " . $e->getMessage();
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM clientes WHERE id = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            error_log("Error en getById de Cliente: " . $e->getMessage());
            return false;
        }
    }

    public function actualizar($id, $documento, $telefono, $ciudad, $direccion)
    {
        try {
            $sql = "UPDATE clientes
                    SET documento = :documento,
                        telefono = :telefono,
                        ciudad = :ciudad,
                        direccion = :direccion
                    WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->bindParam(":documento", $documento);
            $consulta->bindParam(":telefono", $telefono);
            $consulta->bindParam(":ciudad", $ciudad);
            $consulta->bindParam(":direccion", $direccion);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al actualizar el cliente: " . $e->getMessage();
            return false;
        }
    }
}
?>
