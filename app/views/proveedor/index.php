<h1>Lista de Proveedores</h1>

    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre </th>
                <th>Nit</th>
                <th>Telefono</th>
                <th>direccion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedores as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['nombre'] ?></td>
                    <td><?= $p['nit'] ?></td>
                    <td><?= $p['telefono'] ?></td>
                    <td><?= $p['direccion'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>