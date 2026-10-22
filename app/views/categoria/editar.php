<h1>Actualizando datos</h1>

<form action="/categoria/editar" method="POST">

    <input type="hidden" name="id" value="<?= $categoria->id ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?= $categoria->nombre ?>">
    <br><br>

    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion" value="<?= $categoria->descripcion ?>">
    <br><br>

    <label for="estado">Estado:</label>
    <input type="text" id="estado" name="estado" value="<?= $categoria->estado ?>">
    <br><br>

    <button type="submit">Guardar cambios</button>

</form>
