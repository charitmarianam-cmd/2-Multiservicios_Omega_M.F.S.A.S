<?php
require_once '../config/database.php';
require_once '../app/models/producto.php';

class ProductoController {
    public function index() {
        $database = new Database();
        $db = $database->getConnection();

        $productoModel = new Producto($db);
        $result = $productoModel->obtenerTodos();
        $productos = $result->fetchAll(PDO::FETCH_ASSOC);

        require_once '../app/views/productos/index.php';
    }
}