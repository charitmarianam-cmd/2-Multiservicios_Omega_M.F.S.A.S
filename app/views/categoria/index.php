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
                    <form action="/categoria/eliminar" method="POST" style="display:inline;"
                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');">

                        <input type="hidden" name="id" value="<?= $c['id'] ?>">

                        <button type="submit"
                            style="color: red; background: none; border: none; padding: 0; cursor: pointer; text-decoration: underline;">
                            Eliminar
                        </button>
                    </form>

                    </a>
                </td>
            </tr>

        <?php endforeach; ?>

    </tbody>

</table>

</body>

</html>