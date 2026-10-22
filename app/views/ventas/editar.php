<h1>Actualizando datos de la venta</h1>

<form action="/venta/editar" method="POST">

    <input type="hidden" name="id" value="<?= $venta->id ?>">

    <label for="id_cliente">ID del cliente:</label>
    <input type="number" id="id_cliente" name="id_cliente" value="<?= $venta->id_cliente ?>" required>
    <br><br>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha"value="<?= $venta->fecha ?>" required>
    <br><br>

    <label for="total">Total:</label>
    <input type="number" id="total" name="total" step="0.01"value="<?= $venta->total ?>" required>
    <br><br>

    <button type="submit">Guardar cambios</button>

</form>

<br>
<a href="/venta">Volver</a>