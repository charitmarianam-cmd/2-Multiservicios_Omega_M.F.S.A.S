<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Registrar venta</h1>

<form action="/venta" method="POST">

    <label for="id_cliente">ID del cliente:</label>
    <input type="number" id="id_cliente" name="id_cliente" required>
    <br><br>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required>
    <br><br>

    <label for="total">Total:</label>
    <input type="number" id="total" name="total" step="0.01" min="0" required>
    <br><br>

    <button type="submit">Guardar venta</button>

</form>

<br>
<a href="/venta">Volver</a>

</body>
</html>