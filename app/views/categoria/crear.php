<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Categoría</title>
</head>

<body>

    <h1>Crear Categoría</h1>

    <form action="/categoria" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label>Descripción:</label>
        <input type="text" name="descripcion"><br><br>

        <label>Estado:</label>
        <input type="text" name="estado"><br><br>

        <button type="submit">Guardar</button>

    </form>

    <br>

    <a href="index.php">Volver</a>
</body>

</html>