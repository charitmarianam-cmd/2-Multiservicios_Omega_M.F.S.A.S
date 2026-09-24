<?php
require_once __DIR__ . "/../../config/Database.php";

class Categoria {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM categorias";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
    }

    public function getById($idCategoria)
    {
        try {
            $sql = "SELECT * FROM categorias WHERE idCategoria = :idCategoria";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idCategoria", $idCategoria, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Categoria: " . $e->getMessage());
            return false;
        }
    }
}