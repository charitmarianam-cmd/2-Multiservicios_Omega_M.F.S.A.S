<h1>Lista de Productos</h1>

    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Precio Unitario</th>
                <th>Stock</th>
                <th>Categoría / Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['nombre'] ?></td>
                    <td><?= $p['precio'] ?></td>
                    <td><?= $p['cantidad'] ?></td>
                    <td><?= $p['categoria'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>