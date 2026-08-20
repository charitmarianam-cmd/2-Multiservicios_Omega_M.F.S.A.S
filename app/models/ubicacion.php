<?php
class Ubicacion {
    private $conn;
    private $table_name = "ubicacion";

    public $id;
    public $direccion;
    public $ciudad;
    public $departamento;

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