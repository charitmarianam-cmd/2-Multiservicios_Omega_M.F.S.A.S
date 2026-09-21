<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos - Multiservicios OMEGA</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <a href="index.php?action=crearProducto">+ Registrar Nuevo Producto</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0">
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
            <?php if (!empty($productos)): ?>
                <?php foreach ($productos as $p): ?>
                    <tr>
                        <td><?= htmlspecialchars($p['idProducto'] ?? '') ?></td>
                        <td><?= htmlspecialchars($p['nomProducto'] ?? '') ?></td>
                        <td>$<?= number_format($p['precioUnitario'] ?? 0, 2) ?></td>
                        <td><?= htmlspecialchars($p['stock'] ?? '0') ?></td>
                        <td><?= htmlspecialchars($p['idTipoProduc'] ?? 'General') ?></td>
                        <td>
                            <a href="index.php?action=editarProducto&id=<?= $p['idProducto'] ?>">Editar</a> | 
                            <a href="index.php?action=eliminarProducto&id=<?= $p['idProducto'] ?>" onclick="return confirm('¿Está seguro de eliminar este producto?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No hay productos registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>