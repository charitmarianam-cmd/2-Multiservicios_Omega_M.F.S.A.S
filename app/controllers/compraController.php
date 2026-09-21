<?php
require_once '../config/database.php';
require_once '../app/models/compra.php';

class CompraController {
    
    public function index() {
        $database = new Database();
        $db = $database->getConnection();

        $compraModel = new Compra($db);
        $result = $compraModel->obtenerTodas();
        $compras = $result->fetchAll(PDO::FETCH_ASSOC);

        require_once '../app/views/compras/index.php';
    }

    public function crear() {
        require_once '../app/views/compras/crear.php';
    }
}