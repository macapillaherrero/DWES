<?php
// Ejercicio 1: Ordenar nombres por longitud
echo "Ejercicio 1: Ordenar nombres por longitud\n";
$nombres = ["Carlos", "Ana", "Beatriz", "Miguel", "Luis"];

usort($nombres, function($a, $b) {
    return strlen($a) - strlen($b);
});

print_r($nombres);
echo "\n\n";

// Ejercicio 2: Convertir todos los elementos a mayùsculas
echo "Ejercicio 2: Convertir todos los elementos a mayùsculas\n";
$palabras = ["laravel", "php", "servidor", "backend"];

$mayusculas = array_map($word => strtoupper($word), $palabras);

print_r($mayusculas);
echo "\n\n";

// Ejercicio 3: Ordenar objetos por propiedad numérica
echo "Ejercicio 3: Ordenar objetos por puntuación\n";
$jugadores = [
    ["nombre" => "Ana", "puntuacion" => 85],
    ["nombre" => "Luis", "puntuacion" => 120],
    ["nombre" => "Bea", "puntuacion" => 95],
];

usort($jugadores, fn($a, $b) => $b['puntuacion'] - $a['puntuacion']);

print_r($jugadores);
echo "\n\n";

// Ejercicio 4: Ordenar alfabéticamente ignorando mayúsculas/minúsculas
echo "Ejercicio 4: Ordenar alfabéticamente ignorando mayúsculas/minúsculas\n";
$palabras = ["PHP", "laravel", "Servidor", "backend", "Api"];

usort($palabras, function($a, $b) {
    return strcmp(strtolower($a), strtolower($b));
});

print_r($palabras);
echo "\n\n";

// Ejercicio 5: Filtrar elementos que contienen una letra
echo "Ejercicio 5: Filtrar elementos que contienen la letra 'a'\n";
$palabras = ["php", "laravel", "desarrollo", "web", "usuario"];

$resultado = array_filter($palabras, fn($word) => strpos($word, 'a') !== false);

print_r($resultado);
echo "\n\n";

// Ejercicio 6: Transformar a arrays de longitud
echo "Ejercicio 6: Transformar a arrays de longitud\n";
$palabras = ["laravel", "php", "servidor", "backend"];

$longitudes = array_map(fn($word) => strlen($word), $palabras);

print_r($longitudes);
?>