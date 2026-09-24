<?php

require_once __DIR__ . "/../models/cliente.php";

class ClienteController {
    public function index(){
        try {
            $cliente = new Cliente();
            $clientes = $cliente->getAll();

            require_once __DIR__ . "/../views/clientes/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de clientes";
        }
    }
}