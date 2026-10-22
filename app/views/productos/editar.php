<h1>Actualizando datos</h1>

<form action="/producto/editar" method="POST">
    <input type="hidden" name="id" value="<?= $producto->id ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?= $producto->nombre ?>">
    <br><br>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" value="<?= $producto->precio ?>">
    <br><br>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" value="<?= $producto->cantidad ?>">
    <br><br>

    <label for="categoria">Categoría:</label>
    <input type="text" id="categoria" name="categoria" value="<?= $producto->categoria ?>">
    <br><br>

    <button type="submit">Guardar cambios</button>
</form>

