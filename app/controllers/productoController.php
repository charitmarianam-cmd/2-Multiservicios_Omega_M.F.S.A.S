<?php

require_once __DIR__ . "/../models/producto.php";

class ProductoController
{
    public function index()
    {
        try {
            $producto = new Producto();
            $productos = $producto->getAll();

            require_once __DIR__ . "/../views/productos/index.php";

        } catch (Exception $e) {
            echo "Error en el controlador de productos";
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/productos/crear.php";
    }

   public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $categoria=$_POST['categoria'];

        $producto = new Producto();
        $producto->guardar($id,$nombre,$precio,$cantidad,$categoria);
        $resultado = $producto->guardar($id,$nombre,$precio,$cantidad,$categoria);

        if ($resultado) {
            echo "Producto guardado correctamente.";
             $this->index();
        } else {
            echo "Error al guardar la categoría.";
        }
    }

    
    }

?>
