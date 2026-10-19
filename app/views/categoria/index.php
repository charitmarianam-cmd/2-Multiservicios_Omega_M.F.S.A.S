<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de Categorías</title>
</head>

<body>

    <h1>Lista de Categorías</h1>

    <table border="1">

        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($categorias as $c): ?>

                <tr>
                    <td><?= $c['nombre'] ?></td>
                    <td><?= $c['descripcion'] ?></td>
                    <td><?= $c['estado'] ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</body>

</html>
