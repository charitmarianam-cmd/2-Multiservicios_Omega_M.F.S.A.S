<?php

require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'ProductoModel.php';

class ProductoController {

    public function index() {
        $model = new ProductoModel();
        
        $listado = $model->obtenerTodos();
        $consultado = $model->obtenerPorId(5);

        require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'productoView.php';
    }
}