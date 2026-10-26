<h1>Lista de Productos</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre del Producto</th>
            <th>Precio Unitario</th>
            <th>Stock</th>
            <th>Categoría / Tipo</th>
            <th>Acciones</th>
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
                <td>
                    <a href="/producto/editar?id=<?= $p['id'] ?>">Editar</a>

                    <!-- FORMULARIO POST PARA ELIMINAR PRODUCTO -->
                    <form action="/producto/eliminar" method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('¿Está seguro de que desea eliminar este producto?');">

                        <input type="hidden" name="id" value="<?= $p['id'] ?>">

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