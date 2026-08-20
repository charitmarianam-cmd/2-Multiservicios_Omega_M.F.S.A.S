<?php
class Producto {
    private $conn;
    private $table_name = "producto";

    public $id;
    public $nombre;
    public $precio;
    public $stock;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodos() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}