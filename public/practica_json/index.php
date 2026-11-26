<h1>Práctica PHP y JSON</h1>

<?php

// ==========================================
// 1. EJERCICIO 1: DE PHP A JSON
// ==========================================

echo "<div class='seccion'>";

echo "<h2>1. Ejercicio 1: De PHP a JSON</h2>";

$productosEjercicio1 = [
    [
        "id" => 1,
        "nombre" => "Mouse inalámbrico",
        "precio" => 35000,
        "stock" => 12,
        "disponibilidad" => true
    ],
    [
        "id" => 2,
        "nombre" => "Teclado mecánico",
        "precio" => 165000,
        "stock" => 8,
        "disponibilidad" => true
    ],
    [
        "id" => 3,
        "nombre" => "Monitor de 24 pulgadas",
        "precio" => 780000,
        "stock" => 6,
        "disponibilidad" => true
    ]
];

$jsonTresProductos = json_encode($productosEjercicio1);

echo "<p><strong>JSON inicial (3 productos):</strong></p>";

echo "<pre>";
echo json_encode($productosEjercicio1, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "</pre>";


$productosEjercicio1[] = [
    "id" => 4,
    "nombre" => "Cable USB-C",
    "precio" => 25000,
    "stock" => 30,
    "disponibilidad" => true
];

$jsonCuatroProductos = json_encode(
    $productosEjercicio1,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

echo "<p><strong>JSON con cuarto producto y JSON_PRETTY_PRINT:</strong></p>";

echo "<pre>";
echo $jsonCuatroProductos;
echo "</pre>";

echo "</div>";


// ==========================================
// 2. EJERCICIO 2: DE JSON A PHP
// ==========================================

echo "<div class='seccion'>";

echo "<h2>2. Ejercicio 2: De JSON a PHP</h2>";

$rutaArchivo = __DIR__ . "/productos.json";

if (!file_exists($rutaArchivo)) {

    echo "<p class='error'>No se encontró productos.json en " . __DIR__ . "</p>";

    $listaProductos = [];

} else {

    $contenidoJson = file_get_contents($rutaArchivo);

    $decodificado = json_decode($contenidoJson, true);

    $listaProductos = isset($decodificado["productos"])
        ? $decodificado["productos"]
        : $decodificado;


    // Todos los productos: Nombre y Precio

    echo "<p><strong>Todos los productos (Nombre y Precio):</strong></p>";

    foreach ($listaProductos as $item) {

        echo "Nombre: " . $item["nombre"]
        . " | Precio: $"
        . number_format($item["precio"], 0, ",", ".")
        . "<br>";

    }


    // Productos con precio superior a $100.000

    echo "<p><strong>Productos con precio superior a $100.000:</strong></p>";

    foreach ($listaProductos as $item) {

        if ($item["precio"] > 100000) {

            echo "Nombre: " . $item["nombre"]
            . " | Precio: $"
            . number_format($item["precio"], 0, ",", ".")
            . "<br>";

        }

    }

}

echo "</div>";


// ==========================================
// 3. EJERCICIO 3: MODIFICAR Y CONVERTIR INFORMACIÓN
// ==========================================

echo "<div class='seccion'>";

echo "<h2>3. Ejercicio 3: Modificar y convertir información</h2>";

$idBuscar = 3;

$nuevoPrecio = 850000;

$encontrado = false;


// Buscar el producto y modificar el precio

foreach ($listaProductos as &$producto) {

    if ($producto["id"] == $idBuscar) {

        $producto["precio"] = $nuevoPrecio;

        $encontrado = true;

        break;

    }

}

unset($producto);


// Convertir nuevamente a JSON

$jsonModificado = json_encode(
    $listaProductos,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);


if ($encontrado) {

    echo "<p>Producto con ID <strong>"
    . $idBuscar
    . "</strong> actualizado a <strong>$"
    . number_format($nuevoPrecio, 0, ",", ".")
    . "</strong>:</p>";

} else {

    echo "<p>No se encontró un producto con ID <strong>"
    . $idBuscar
    . "</strong>.</p>";

}

echo "<pre>";
echo $jsonModificado;
echo "</pre>";

echo "</div>";


// ==========================================
// ACTIVIDAD 1. EJEMPLO DE RESPUESTA HTTP
// ==========================================

echo "<div class='seccion'>";

echo "<h2>4. Actividad 1: Ejemplo de respuesta HTTP</h2>";

echo "<p><strong>header()</strong> indica el tipo de contenido que se va a enviar.</p>";

echo "<p><strong>http_response_code()</strong> establece el código de respuesta HTTP.</p>";

echo "<p><strong>json_encode()</strong> convierte el arreglo PHP a formato JSON.</p>";

echo "<h3>Ejemplo de respuesta exitosa:</h3>";

$ejemploRespuesta = [
    "mensaje" => "Operación exitosa"
];

echo "<p class='exito'>Código HTTP: 200</p>";

echo "<pre>";
echo json_encode($ejemploRespuesta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "</pre>";

echo "</div>";


// ==========================================
// ACTIVIDAD 2. CONSULTA DEL PRODUCTO MOUSE
// ==========================================

echo "<div class='seccion'>";

echo "<h2>5. Actividad 2: Consulta del producto Mouse</h2>";

$productoMouse = [
    "id" => 1,
    "nombre" => "Mouse",
    "precio" => 35000
];

$idBuscadoMouse = 1;


if ($idBuscadoMouse === $productoMouse["id"]) {

    // Producto encontrado

    echo "<p class='exito'>Producto encontrado - HTTP 200</p>";

    echo "<pre>";
    echo json_encode($productoMouse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";

} else {

    // Producto no encontrado

    $respuestaMouse = [
        "mensaje" => "Producto no encontrado"
    ];

    echo "<p class='error'>Producto no encontrado - HTTP 404</p>";

    echo "<pre>";
    echo json_encode($respuestaMouse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";

}

echo "</div>";


// ==========================================
// ACTIVIDAD 2. COMPROBACIÓN MOUSE NO ENCONTRADO
// ==========================================

echo "<div class='seccion'>";

echo "<h2>6. Comprobación: Mouse no encontrado</h2>";

$idBuscadoMouse = 10;


if ($idBuscadoMouse === $productoMouse["id"]) {

    echo "<p class='exito'>Producto encontrado - HTTP 200</p>";

    echo "<pre>";
    echo json_encode($productoMouse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";

} else {

    $respuestaMouse = [
        "mensaje" => "Producto no encontrado"
    ];

    echo "<p class='error'>Producto no encontrado - HTTP 404</p>";

    echo "<pre>";
    echo json_encode($respuestaMouse, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";

}

echo "</div>";


// ==========================================
// ACTIVIDAD 3. CONSULTA DEL PRODUCTO MONITOR
// ==========================================

echo "<div class='seccion'>";

echo "<h2>7. Actividad 3: Consulta del producto Monitor</h2>";

$productoMonitor = [
    "id" => 3,
    "nombre" => "Monitor",
    "precio" => 780000,
    "stock" => 6
];

$idBuscadoMonitor = 3;


if ($idBuscadoMonitor === $productoMonitor["id"]) {

    // Producto encontrado

    echo "<p class='exito'>Producto encontrado - HTTP 200</p>";

    echo "<pre>";
    echo json_encode($productoMonitor, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";

} else {

    // Producto no encontrado

    $respuestaMonitor = [
        "mensaje" => "El producto no existe"
    ];

    echo "<p class='error'>Producto no encontrado - HTTP 404</p>";

    echo "<pre>";
    echo json_encode($respuestaMonitor, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";

}

echo "</div>";


// ==========================================
// RETO DE COMPROBACIÓN
// ==========================================

echo "<div class='seccion'>";

echo "<h2>8. Reto de comprobación: Monitor no encontrado</h2>";

$idBuscadoReto = 5;


if ($idBuscadoReto === $productoMonitor["id"]) {

    // Producto encontrado

    echo "<p class='exito'>Producto encontrado - HTTP 200</p>";

    echo "<pre>";
    echo json_encode($productoMonitor, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";

} else {

    // Producto no encontrado

    $respuestaReto = [
        "mensaje" => "El producto no existe"
    ];

    echo "<p class='error'>Producto no encontrado - HTTP 404</p>";

    echo "<pre>";
    echo json_encode($respuestaReto, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";

}

echo "</div>";

?>

</body>
</html>