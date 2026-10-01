<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Venta</title>
</head>

<body>

    <h1>Crear Venta</h1>

    
    <form action="/ventas" method="POST">

        <label>ID:</label>
        <input type="text" name="id"><br><br>

        <label>Id_Cliente:</label>
        <input type="text" name="id_cliente"><br><br>

        <label>Fecha:</label>
        <input type="date" name="fecha"><br><br>

        <label>Total:</label>
        <input type="text" name="total"><br><br>

        <button type="submit">Guardar</button>

    </form>

    <br>

    <a href="index.php">Volver</a>

</body>

</html>
