<?php
require_once __DIR__ . "/../../config/Database.php";

class Proveedor {
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

    public function getById($idProveedor)
    {
        try {
            $sql = "SELECT * FROM proveedores WHERE idProveedor = :idProveedor";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idProveedor", $idProveedor, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Proveedor: " . $e->getMessage());
            return false;
        }
    }
}