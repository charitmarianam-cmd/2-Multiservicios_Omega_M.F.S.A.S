<?php

require_once __DIR__ . "/../../config/Database.php";

class Proveedor
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM proveedores";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll();
    }

    public function guardar($nombre, $nit, $telefono, $direccion)
    {
        try {
            $sql = "INSERT INTO proveedores
                    (nombre, nit, telefono, direccion)
                    VALUES
                    (:nombre, :nit, :telefono, :direccion)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":nit", $nit);
            $consulta->bindParam(":telefono", $telefono);
            $consulta->bindParam(":direccion", $direccion);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al guardar el proveedor: " . $e->getMessage();
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM proveedores WHERE id = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            error_log("Error al buscar el proveedor: " . $e->getMessage());
            return false;
        }
    }

    public function actualizar($id, $nombre, $nit, $telefono, $direccion)
    {
        try {
            $sql = "UPDATE proveedores
                    SET nombre = :nombre,
                        nit = :nit,
                        telefono = :telefono,
                        direccion = :direccion
                    WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":nit", $nit);
            $consulta->bindParam(":telefono", $telefono);
            $consulta->bindParam(":direccion", $direccion);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al actualizar el proveedor: " . $e->getMessage();
            return false;
        }
    }
 public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM proveedores WHERE id = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id", $id, PDO::PARAM_INT);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al eliminar el proveedor: " . $e->getMessage();
            return false;
        }
    }
}
?>
