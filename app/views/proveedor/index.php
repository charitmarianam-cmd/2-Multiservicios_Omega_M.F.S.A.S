<h1>Lista de Proveedores</h1>

<table border=1>
    <thead>
        <tr>
            <th>Nombre </th>
            <th>Nit</th>
            <th>Telefono</th>
            <th>direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <body>
        <?php foreach ($proveedores as $p): ?>
            <tr>
                <td><?= $p['nombre'] ?></td>
                <td><?= $p['nit'] ?></td>
                <td><?= $p['telefono'] ?></td>
                <td><?= $p['direccion'] ?></td>
                <td>
                    <a href="/proveedor/editar?id=<?= $p['id'] ?>">Editar</a>

                    <!-- FORMULARIO POST PARA ELIMINAR PROVEEDOR -->
                    <form action="/proveedor/eliminar" method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('¿Está seguro de que desea eliminar este proveedor?');">

                        <input type="hidden" name="id" value="<?= $p['id'] ?>">

                        <button type="submit"
                            style="color: red; background: none; border: none; padding: 0; cursor: pointer; text-decoration: underline;">
                            Eliminar
                        </button>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </body>
</table>
</body>

</html>