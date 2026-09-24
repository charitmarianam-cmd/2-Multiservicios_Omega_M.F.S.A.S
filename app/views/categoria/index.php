<h1>Lista de Categorias</h1>

    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Descripcion</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $c): ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['nombre'] ?></td>
                    <td><?= $c['descripcion'] ?></td>
                    <td><?= $c['estado'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>