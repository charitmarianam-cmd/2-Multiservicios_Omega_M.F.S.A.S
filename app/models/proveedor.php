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

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM proveedores WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);

            $consulta->execute();

            return $consulta->fetch();

        } catch (PDOException $e) {

            error_log("Error en getById de Proveedor: " . $e->getMessage());

            return false;
        }
    }

    public function guardar($nombre, $nit, $telefono, $direccion)
    {
        try {
            $sql = "INSERT INTO proveedores (nombre, nit, telefono, direccion)
                    VALUES (:nombre, :nit, :telefono, :direccion)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":nit", $nit);
            $consulta->bindParam(":telefono", $telefono);
              $consulta->bindParam(":direccion", $direccion);

           return $consulta->execute();



        } catch (PDOException $e) {
            echo "Error al guardar el proveedor: " . $e->getMessage();
        }
    }

    
}
