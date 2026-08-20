<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes - Multiservicios Omega</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <ul>
        <?php foreach ($clientes as $cliente): ?>
            <li><?= htmlspecialchars($cliente['nombre'] ?? 'Sin nombre') ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>