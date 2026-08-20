<?php
class Compra {
    private $conn;
    private $table_name = "compra";

    public $id;
    public $fecha;
    public $total;
    public $id_proveedor;

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