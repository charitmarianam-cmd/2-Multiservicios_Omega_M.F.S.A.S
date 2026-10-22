<h1>Actualizando datos del cliente</h1>

<form action="/cliente/editar" method="POST">

    <input type="hidden" name="id" value="<?= $cliente->id ?>">

    <label for="documento">Documento:</label>
    <input type="text" id="documento" name="documento" value="<?= $cliente->documento ?>">
    <br><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" value="<?= $cliente->telefono ?>">
    <br><br>

    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" value="<?= $cliente->ciudad ?>">
    <br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="<?= $cliente->direccion ?>">
    <br><br>

    <button type="submit">Guardar cambios</button>

</form>
