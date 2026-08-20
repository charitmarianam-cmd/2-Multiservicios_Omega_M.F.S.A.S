<?php
class Cliente {
    private $conn;
    private $table_name = "cliente";

    public $id;
    public $nombre;
    public $email;
    public $telefono;

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