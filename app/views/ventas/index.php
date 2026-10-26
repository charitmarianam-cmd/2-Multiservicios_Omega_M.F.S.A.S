<h1>Lista de Ventas</h1>

<table border=1>
    <thead>
        <tr>
            <th>ID</th>
            <th>Id_cliente</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <body>
        <?php foreach ($ventas as $v): ?>
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= $v['id_cliente'] ?></td>
                <td><?= $v['fecha'] ?></td>
                <td><?= $v['total'] ?></td>
                <td>
                    <a href="/venta/editar?id=<?= $v['id'] ?>">Editar</a>

                    <!-- FORMULARIO POST PARA ELIMINAR VENTA -->
                    <form action="/venta/eliminar" method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('¿Está seguro de que desea eliminar esta venta?');">

                        <input type="hidden" name="id" value="<?= $v['id'] ?>">

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