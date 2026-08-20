<?php
require_once '../config/database.php';
require_once '../app/models/proveedor.php';

class ProveedorController {

    public function index() {
        $database = new Database();
        $db = $database->getConnection();

        $proveedorModel = new Proveedor($db);
        $result = $proveedorModel->obtenerTodos();
        $proveedores = $result->fetchAll(PDO::FETCH_ASSOC);

        require_once '../app/views/proveedores/index.php';
    }

    public function crear() {
        require_once '../app/views/proveedores/crear.php';
    }
}