<?php

// 1. Crear un array con los meses del año, darle la vuelta y mostrarlo
$meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
// 2. Dale la vuelta para que queden de este modo: “diciembre, noviembre…”.
$meses_invertidos = array_reverse($meses);

// 3. Rellenar un array con 10 números aleatorios y ordenarlos de mayor a menor
$numeros_aleatorios = [];
for ($i = 0; $i < 10; $i++) {
    $numeros_aleatorios[] = rand(1, 100);
}
rsort($numeros_aleatorios);

//4. Quitar enero y febrero y añadirlos al final
$meses_modificado = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
$primer_mes = array_shift($meses_modificado); // Extrae enero
$segundo_mes = array_shift($meses_modificado); // Extrae febrero
array_push($meses_modificado, $primer_mes, $segundo_mes); // Añade enero y febrero al final

// 5. Rellenar un array con números pares del 0 al 20
$numeros_pares = [];
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        $numeros_pares[] = $i;
    }
}

// 6. Función para calcular el factorial y aplicarla al array de pares
function factorial($numero) {
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

$factoriales = [];
foreach ($numeros_pares as $par) {
    $factoriales[$par] = factorial($par);
}

// 7. Array de edades y comprobaciones
$edades = [14, 18, 19, 25, 84, 45, 87, 56, 28, 9, 35, 64];

// Comprobar si todas las edades están entre 18 y 65
$todas_en_rango = true;
foreach ($edades as $edad) {
    if ($edad < 18 || $edad > 65) {
        $todas_en_rango = false;
        break;
    }
}

// Averiguar si hay alguna edad mayor que 67
$hay_mayor_67 = false;
foreach ($edades as $edad) {
    if ($edad > 67) {
        $hay_mayor_67 = true;
        break;
    }
}

// Averiguar si hay alguna edad menor que 15
$hay_menor_15 = false;
foreach ($edades as $edad) {
    if ($edad < 15) {
        $hay_menor_15 = true;
        break;
    }
}

// Obtener la edad menor y su posición
$edad_menor = min($edades);
$posicion_menor = array_search($edad_menor, $edades);

// 8. Rellenar una matriz de 6x5 con números aleatorios
$matriz = [];
$filas = 6;
$columnas = 5;
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}
?>
