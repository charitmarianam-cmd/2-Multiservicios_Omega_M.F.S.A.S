<h1>Actualizando datos del proveedor</h1>

<form action="/proveedor/editar" method="POST">
    <input type="hidden" name="id" value="<?= $proveedor->id ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?= $proveedor->nombre ?>">
    <br><br>

    <label for="nit">NIT:</label>
    <input type="text" id="nit" name="nit" value="<?= $proveedor->nit ?>">
    <br><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" value="<?= $proveedor->telefono ?>">
    <br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="<?= $proveedor->direccion ?>">
    <br><br>

    <button type="submit">Guardar cambios</button>
</form>