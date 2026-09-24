<?php
require_once __DIR__ . "/../../config/Database.php";

class Compra {
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

    public function getById($idCompra)
    {
        try {
            $sql = "SELECT * FROM compras WHERE idCompra = :idCompra";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idCompra", $idCompra, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Compra: " . $e->getMessage());
            return false;
        }
    }
}