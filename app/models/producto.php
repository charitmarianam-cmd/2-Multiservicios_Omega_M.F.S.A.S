<?php

require_once __DIR__ . "/../../config/Database.php";

class Producto
{
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

    public function guardar($id, $nombre, $precio, $cantidad, $categoria)
    {
        try {
            $sql = "INSERT INTO productos
                    (id, nombre, precio, cantidad, categoria)
                    VALUES (:id, :nombre, :precio, :cantidad, :categoria)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":precio", $precio);
            $consulta->bindParam(":cantidad", $cantidad);
            $consulta->bindParam(":categoria", $categoria);

            $consulta->execute();

        } catch (PDOException $e) {
            echo "Error al guardar el producto: " . $e->getMessage();
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM productos WHERE id = :id";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":id", $id, PDO::PARAM_INT);

            $consulta->execute();

            return $consulta->fetch();

        } catch (PDOException $e) {

            error_log("Error en getById de Producto: " . $e->getMessage());

            return false;
        }
    }
}
