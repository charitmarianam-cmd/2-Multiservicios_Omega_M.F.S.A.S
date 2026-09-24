<?php
require_once __DIR__ . "/../../config/Database.php";

class Producto {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT id, nombre, precio, cantidad, categoria FROM productos";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
    }

    public function getById($idProducto)
    {
        try {
            $sql = "SELECT * FROM productos WHERE idProducto = :idProducto";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idProducto", $idProducto, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(); // fetch single record
        } catch (PDOException $e) {
            error_log("Error en getById de Producto: " . $e->getMessage());
            return false;
        }
    }
}