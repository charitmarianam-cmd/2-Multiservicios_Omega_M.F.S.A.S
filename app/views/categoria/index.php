<h1>Lista de Categorias</h1>

    <table border=1>
        <thead>
            <tr>
              
                <th>Nombre del Producto</th>
                <th>Descripcion</th>
                <th>Estado</th>
            </tr>
        </thead>
        <body>
            <?php foreach ($categorias as $c): ?>
                <tr>
                    <td><?= $c['nombre'] ?></td>
                    <td><?= $c['descripcion'] ?></td>
                    <td><?= $c['estado'] ?></td>
                </tr>
            <?php endforeach; ?>
        </body>
    </table>
</body>
</html>