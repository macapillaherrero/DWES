<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $catalogo  = [
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

    function ordenar_por_precio($categoria) {
    $precios = array();
    foreach ($categoria as $producto => $datos) {
        $precios[] =+ $datos['precio'];
    }
    sort($precios);
    $categoria_ordenada = array();
    for ($i = 0; $i < count($categoria) ; $i++) {

        foreach ($categoria as $producto => $datos){
            if ($datos['precio'] === $precios[$i]){
                $categoria_ordenada[$i] = $producto;
            }
        }

    }
    function mostrarProductosPorCategoria ($categoria, $catalogo){
        if(!array_key_exists($categoria, $catalogo)){   
             echo "Error: La categoría $categoria no existe en el inventario.";
             return;
        }

       ordenar_por_precio($categoria);

        foreach ($catalogo[$categoria] as $producto ) {
            echo "  Nombre: " . $producto["nombre"] . "<br>";
            echo "  - Precio: " . number_format($producto["precio"], 2, ',', '.') . " €<br>";
            echo "  - Stock disponible: " . $producto["stock"] . " unidades<br><br>";
        }
    }



    mostrarProductosPorCategoria("Libros", $catalogo);
    ?>
</body>
</html>