<?php

require_once __DIR__ . "/../models/categoria.php";

class CategoriaController
{
    public function index()
    {
        try {
            $categoria = new Categoria();
            $categorias = $categoria->getAll();

            require_once __DIR__ . "/../views/categoria/index.php";

        } catch (Exception $e) {
            echo "Error en el controlador de categorías";
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/categoria/crear.php";
    }
    

   public function guardar(){
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $estado=$_POST['estado'];

        $categoria = new Categoria();
        $categoria->guardar($nombre,$descripcion,$estado);
        $resultado = $categoria->guardar($nombre,$descripcion,$estado);

        if ($resultado) {
            echo "Categoría guardada correctamente.";
             $this->index();
        } else {
            echo "Error al guardar la categoría.";
        }
    }

    
    }

?>

