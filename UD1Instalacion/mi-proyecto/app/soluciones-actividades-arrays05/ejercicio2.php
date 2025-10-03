<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Versión de PHP: 8.3
<?php

// Versión de PHP: 8.3

// El array de inventario no cambia.
$inventario = [
    "Electronica" => [
        ["nombre" => "Televisor LED 4K", "precio" => 499.99, "stock" => 20],
        ["nombre" => "Smartphone X100", "precio" => 299.50, "stock" => 50],
        ["nombre" => "Auriculares Bluetooth", "precio" => 75.00, "stock" => 150],
        ["nombre" => "Portátil Pro", "precio" => 850.00, "stock" => 15]
    ],
    "Libros" => [
        ["nombre" => "Aprendiendo PHP 8.3", "precio" => 29.95, "stock" => 100],
        ["nombre" => "Laravel desde Cero", "precio" => 39.95, "stock" => 80],
        ["nombre" => "Guía de JavaScript Moderno", "precio" => 25.50, "stock" => 120]
    ]
];

/**
 * Paso 2 (Alternativo): Definir la función de comparación por separado.
 * Esta función será utilizada por usort para saber cómo ordenar los elementos.
 * Recibe dos elementos del array ($a y $b) y debe devolver:
 * - Un número negativo si $a va antes que $b.
 * - Cero si son iguales.
 * - Un número positivo si $a va después de $b.
 */
function compararProductosPorPrecio($a, $b) {
    if ($a['precio'] < $b['precio']) {
        return -1;
    } elseif ($a['precio'] > $b['precio']) {
        return 1;
    } else {
        return 0;
    }
}

/**
 * Paso 3: Función principal que utiliza la función de comparación externa.
 */
function mostrarProductosPorCategoria( $categoria,  $productos) {
    if (!array_key_exists($categoria, $productos)) {
        echo "Error: La categoría \"$categoria\" no existe en el inventario.\n";
        return;
    }

    $productosCategoria = $productos[$categoria];

    // Ahora, en lugar de una función anónima, pasamos el nombre de nuestra
    // función de comparación como un string.
    usort($productosCategoria, 'compararProductosPorPrecio');

    // El resto del código para mostrar los resultados es exactamente el mismo.
    echo "--- Productos de la categoría: '$categoria' (ordenados por precio) ---\n";
    foreach ($productosCategoria as $producto) {
        echo "  Nombre: " . $producto['nombre'] . "\n";
        echo "  - Precio: " . number_format($producto['precio'], 2, ',', '.') . " €\n";
        echo "  - Stock disponible: " . $producto['stock'] . " unidades\n\n";
    }
}

// --- EJEMPLO DE USO --- (El resultado será exactamente el mismo)

echo "### Mostrando la categoría 'Electronica' ###\n";
mostrarProductosPorCategoria("Electronica", $inventario);
?>



</body>
</html>