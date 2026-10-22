<h1>Actualizando datos de la compra</h1>

<form action="/compra/editar" method="POST">

    <input type="hidden" name="id" value="<?= $compra->id ?>">

    <label for="id_proveedor">ID del proveedor:</label>
    <input type="number" id="id_proveedor" name="id_proveedor" value="<?= $compra->id_proveedor ?>" required>
    <br><br>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" value="<?= $compra->fecha ?>" required>
    <br><br>

    <label for="total">Total:</label>
    <input type="number" id="total" name="total" step="0.01" value="<?= $compra->total ?>" required>
    <br><br>

    <button type="submit">Guardar cambios</button>

</form>
