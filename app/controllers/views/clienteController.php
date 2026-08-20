<?php
require_once '../config/database.php';
require_once '../app/models/cliente.php';

class ClienteController {
    public function index() {
        $database = new Database();
        $db = $database->getConnection();

        $clienteModel = new Cliente($db);
        $result = $clienteModel->obtenerTodos();
        $clientes = $result->fetchAll(PDO::FETCH_ASSOC);

        require_once '../app/views/clientes/index.php';
    }
}