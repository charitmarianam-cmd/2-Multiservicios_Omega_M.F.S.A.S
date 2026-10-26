<h1>Lista de Compras</h1>

<table border=1>
    <thead>
        <tr>
            <th>id</th>
            <th>id_proveedor</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <body>
        <?php foreach ($compras as $c): ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['id_proveedor'] ?></td>
                <td><?= $c['fecha'] ?></td>
                <td><?= $c['total'] ?></td>
                <td>
                    <a href="/compra/editar?id=<?= $c['id'] ?>">Editar</a>

                    <!-- FORMULARIO POST PARA ELIMINAR COMPRA -->
                    <form action="/compra/eliminar" method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('¿Está seguro de que desea eliminar esta compra?');">

                        <input type="hidden" name="id" value="<?= $c['id'] ?>">

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