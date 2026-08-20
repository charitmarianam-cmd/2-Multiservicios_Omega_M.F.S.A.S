<?php
class Proveedor {
    private $conn;
    private $table_name = "proveedor";

    public $id;
    public $nombre;
    public $telefono;
    public $nit;

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