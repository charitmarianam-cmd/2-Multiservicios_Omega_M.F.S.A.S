<h1>Lista de Clientes</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Documento</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($clientes as $c): ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['documento'] ?></td>
                <td><?= $c['telefono'] ?></td>
                <td><?= $c['ciudad'] ?></td>
                <td><?= $c['direccion'] ?></td>
                <td>
                    <a href="/cliente/editar?id=<?= $c['id'] ?>">Editar</a>

                    <form action="/cliente/eliminar" method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('¿Está seguro de que desea eliminar este cliente?');">

                        <input type="hidden" name="id" value="<?= $c['id'] ?>">

                        <button type="submit"
                            style="color: red; background: none; border: none; padding: 0; cursor: pointer; text-decoration: underline;">
                            Eliminar
                        </button>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>