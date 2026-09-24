<h1>Lista de Compras</h1>

    <table border=1>
        <thead>
            <tr>
                <th>id</th>
                <th>id_proveedor</th>
                <th>Fecha</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compras as $c): ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['id_proveedor'] ?></td>
                    <td><?= $c['fecha'] ?></td>
                    <td><?= $c['total'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>