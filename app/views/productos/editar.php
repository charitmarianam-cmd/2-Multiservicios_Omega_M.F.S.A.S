<form action="producto/editar" method="POST">

    <input type="hidden" name="id" value="<?= $producto->id ?? ''?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $producto->nombre ?? ''?>"><br><br>

    <label>Precio:</label>
    <input type="text" name="precio" value="<?= $producto->precio ?? '' ?>"><br><br>

    <label>Categoría:</label>
    <input type="text" name="categoria" value="<?= $producto->categoria ?? '' ?>"><br><br>

    <label>Descripción:</label>
    <input type="text" name="descripcion" value="<?= $producto->descripcion ?? ''?>"><br><br>

    <button type="submit">Editar</button>
</form>