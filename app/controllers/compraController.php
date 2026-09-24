<?php

require_once __DIR__ . "/../models/compra.php";

class CompraController {
    public function index(){
        try {
            $compra = new Compra();
            $compras = $compra->getAll();

            require_once __DIR__ . "/../views/compra/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de compras";
        }
    }
}