<?php

require_once __DIR__ . "/../models/compra.php";

class CompraController
{
    public function index()
    {
        try {
            $compra = new Compra();
            $compras = $compra->getAll();

            require_once __DIR__ . "/../views/compra/index.php";

        } catch (Exception $e) {
            echo "Error en el controlador de compras";
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/compra/crear.php";
    }

   public function guardar(){
        $id=$_POST['id'];
        $id_proveedor=$_POST['id_proveedor'];
        $fecha=$_POST['fecha'];
        $total=$_POST['total'];

        $compra = new Compra();
        $compra->guardar($id,$id_proveedor,$fecha,$total);
        $resultado = $compra->guardar($id,$id_proveedor,$fecha,$total);

        if ($resultado) {
            echo "Compra guardada correctamente.";
             $this->index();
        } else {
            echo "Error al guardar la categoría.";
        }
    }

    
    }

?>
