
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Compras</title>
</head>

<body>

    <h1>Crear Compras</h1>

    <form action="/compra" method="POST">

        <label>Proveedor:</label>
        <input type="text" name="id_proveedor" required><br><br>

        <label>Fecha:</label>
        <input type="date" name="fecha" required><br><br>

        <label>Total:</label>
        <input type="number" name="total" step="0.01" min="0" required><br><br>

        <button type="submit">Guardar</button>

    </form>

    <br>

    <a href="/compra">Volver</a>

</body>

</html>
