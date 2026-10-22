
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>

<body>

    <h1>Crear Producto</h1>

    <form action="/producto" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" min="0" required>
        <br><br>

        <label>Cantidad:</label>
        <input type="number" name="cantidad" min="0" required>
        <br><br>

        <label>Categoría:</label>
        <input type="text" name="categoria" required>
        <br><br>

        <button type="submit">Guardar</button>

    </form>

    <br>

    <a href="/producto">Volver</a>

</body>

</html>
