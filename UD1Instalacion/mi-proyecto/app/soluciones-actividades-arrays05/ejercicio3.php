<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 </title>
</head>
<body>
    <?php
// Versión de PHP: 8.3

// 1. Creación del array mixto
$data = [
    "lenguajes" => [
        "frontend" => ["JavaScript", "CSS"],
        "backend" => [
            "PHP", // <-- Primera ocurrencia que encontraremos
            "Python",
            "frameworks" => [
                "laravel" => "PHP",
                "django" => "Python"
            ]
        ]
    ],
    "cms" => "WordPress",
    0 => "Otro valor",
    "herramientas" => ["Git", "Docker", "PHPStorm"]
];


function buscarTodas($data, $valorBuscado,  $rutaActual = [], &$resultados = []) {
    foreach ($data as $clave => $valor) {
        $nuevaRuta = array_merge($rutaActual, [$clave]);
        if ($valor === $valorBuscado) {
            $resultados[] = $nuevaRuta;
        }
        if (is_array($valor)) {
            buscarTodas($valor, $valorBuscado, $nuevaRuta, $resultados);
        }
    }
    return $resultados;
}

// 3. Ejecución y visualización del resultado (PARTE CORREGIDA)
$rutas = buscarTodas($data, "Python");

if (!empty($rutas)) {
    echo "Se encontraron " . count($rutas) . " ocurrencias del valor 'PHP': <br><br>";
    
    // Iteramos sobre el array de rutas encontradas
    foreach ($rutas as $index => $ruta) {
       
        // Verificamos que cada $ruta sea realmente un array antes de usar implode  

         if (is_array($ruta)) {
            echo ($index + 1) . ". Ruta: ['" . implode("']['", $ruta) . "'] <br>";
        }
    }
} else {
    echo "El valor 'PHP' no se encontró en el array.";
}



    ?>
</body>
</html>