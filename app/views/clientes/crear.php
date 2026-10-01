<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Clientes</title>
</head>

<body>

    <h1>Crear Clientes</h1>

    
    <form action="/clientes" method="POST">

        <label>Documento:</label>
        <input type="text" name="documento"><br><br>

        <label>Telefono:</label>
        <input type="text" name="telefono"><br><br>

        <label>Ciudad:</label>
        <input type="text" name="ciudad"><br><br>

        <label>Direccion:</label>
        <input type="text" name="direccion"><br><br>

        <button type="submit">Guardar</button>

    </form>

    <br>

    <a href="index.php">Volver</a>
</body>

</html>