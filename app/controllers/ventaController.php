<?php
require_once '../config/database.php';
require_once '../app/models/venta.php';

class VentaController {
    public function index() {
        $database = new Database();
        $db = $database->getConnection();

        $ventaModel = new Venta($db);
        $result = $ventaModel->obtenerTodas();
        $ventas = $result->fetchAll(PDO::FETCH_ASSOC);

        require_once '../app/views/ventas/index.php';
    }
}