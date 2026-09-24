<h1>Lista de Clientes</h1>

    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Telefono</th>
                <th>Ciudad</th>
                <th>Direccion</th>
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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>