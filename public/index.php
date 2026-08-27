<?php
require_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

if ($db) {
    echo "<h2>¡Proyecto Multiservicios Omega M.F. S.A.S. listo y conectado a MySQL!</h2>";
} else {
    echo "<h2>Error al conectar a la base de datos.</h2>";
}
