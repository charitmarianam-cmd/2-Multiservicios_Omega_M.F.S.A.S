<h1>Lista de Ventas</h1>

    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Id_cliente</th>
                <th>Fecha</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventas as $v): ?>
                <tr>
                    <td><?= $v['id'] ?></td>
                    <td><?= $v['id_cliente'] ?></td>
                    <td><?= $v['fecha'] ?></td>
                    <td><?= $v['total'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>