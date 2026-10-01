<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Proveedor</title>
</head>

<body>

    <h1>Crear Proveedor</h1>

    
    <form action="/proveedor" method="POST">


        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label>Nit:</label>
        <input type="text" name="nit"><br><br>

        <label>Telefono:</label>
        <input type="text" name="telefono"><br><br>

        <label>Direccion:</label>
        <input type="text" name="direccion"><br><br>

        <button type="submit">Guardar</button>

    </form>

    <br>

    <a href="index.php">Volver</a>

</body>

</html>
