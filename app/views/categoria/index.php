<h1>Lista de Categorías</h1>

    <table border="1">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($categorias as $c): ?>

                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['nombre'] ?></td>
                    <td><?= $c['descripcion'] ?></td>
                    <td><?= $c['estado'] ?></td>
                    <td>
                        <a href="/categoria/editar?id=<?= $c['id'] ?>">Editar</a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</body>

</html>
