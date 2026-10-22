<?php

require_once __DIR__ . "/../../config/Database.php";

class Categoria
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        $sql = "SELECT id, nombre, descripcion, estado FROM categorias";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll();
    }

    public function guardar($nombre, $descripcion, $estado)
    {
        try {
            $sql = "INSERT INTO categorias (nombre, descripcion, estado) 
                    VALUES (:nombre, :descripcion, :estado)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":descripcion", $descripcion);
            $consulta->bindParam(":estado", $estado);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al guardar la categoría: " . $e->getMessage();
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM categorias WHERE id = :id";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            error_log("Error en getById de Categoria: " . $e->getMessage());
            return false;
        }
    }

    public function actualizar($id, $nombre, $descripcion, $estado)
    {
        try {
            $sql = "UPDATE categorias
                    SET nombre = :nombre,
                        descripcion = :descripcion,
                        estado = :estado
                    WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":descripcion", $descripcion);
            $consulta->bindParam(":estado", $estado);

            return $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al actualizar la categoría: " . $e->getMessage();
            return false;
        }
    }
}