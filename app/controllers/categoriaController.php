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

    public function guardar()
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];

        $categoria = new Categoria();

        $resultado = $categoria->guardar(
            $nombre,
            $descripcion,
            $estado
        );

        if ($resultado) {
            echo "Categoría guardada correctamente.";
            $this->index();

        } else {
            echo "Error al guardar la categoría.";
        }
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $mCategoria = new Categoria();
        $categoria = $mCategoria->getById($id);

        if (!$categoria) {
            echo "Categoría no encontrada";
            return;
        }

        require_once __DIR__ . "/../views/categoria/editar.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];

        $categoria = new Categoria();

        $resultado = $categoria->actualizar(
            $id,
            $nombre,
            $descripcion,
            $estado
        );

        if ($resultado) {
            echo "Categoría actualizada correctamente.";
            $this->index();

        } else {
            echo "Error al actualizar la categoría.";
        }
    }
    
    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            echo "ID de categoria no válido.";
            return;
        }

        $categoria = new Categoria();
        $resultado = $categoria->eliminar($id);

        if ($resultado) {
            header("Location: /categoria");
            exit;
        } else {
            echo "Error al eliminar la categoria.";
        }
    }
}


?>
