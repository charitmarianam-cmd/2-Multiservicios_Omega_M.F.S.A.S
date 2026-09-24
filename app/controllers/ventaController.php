<?php

require_once __DIR__ . "/../models/venta.php";

class VentaController {
    public function index(){
        try {
            $venta = new Venta();
            $ventas = $venta->getAll();

            require_once __DIR__ . "/../views/ventas/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de ventas";
        }
    }
}