<?php
class Venta {
    private $conn;
    private $table_name = "venta";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodas() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}