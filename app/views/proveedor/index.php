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
                    </td>
                </tr>
            <?php endforeach; ?>
        </body>
    </table>
</body>
</html>