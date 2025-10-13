<?php

echo "<h1>Soluciones Actividades Arrays 02</h1>";



//1. 

echo "<h2>1. Creación e inserción solución de forma tradicional</h2>";
// Crear array inicial con 5 nombres
$nombres = ['Ana', 'Luis', 'María', 'Pedro', 'Sofía'];

// Incrementar el tamaño del array en 1 para hacer espacio
$nombres[] = ''; // Añade un elemento vacío al final

// Desplazar los elementos desde el final para abrir espacio en la posición 2
for ($i = count($nombres) - 1; $i > 2; $i--) {
    $nombres[$i] = $nombres[$i - 1];
}

// Insertar "Carlos" en la posición 2 (tercera posición)
$nombres[2] = 'Carlos';

// Mostrar el array actualizado
print_r($nombres);
echo "<br>";




// 1.2. Crear array vacío llamado $numeros
$numeros = [];

// Insertar los números del 1 al 10 usando un bucle
for ($i = 1; $i <= 10; $i++) {
    $numeros[] = $i;
}

// Imprimir el resultado
print_r($numeros);

// 2.1. Recorrido de arrays mostrando nombre y posición
echo "<h2>2. Recorrido de arrays mostrando nombre y posición</h2>";
$i = 0;
foreach ($nombres as $pos) {
    echo $i." Conozco a alguien llamado $pos"."<br>";
    $i++;
}

// 2.2. Recorrido de arrays mostrando el doble del valor
echo "<h2>2. Recorrido de arrays mostrando el doble del valor</h2>";
foreach ($numeros as $num) {
    echo $num * 2 . "<br>";
}

// 2.3. Recorrido de arrays asociativos mostrando clave y valor
echo "<h2>2. Recorrido de arrays asociativos mostrando clave y valor</h2>";
$capitales = [
    "España" => "Madrid",
    "Francia" => "París",
    "Italia"  => "Roma",
    "Alemania" => "Berlín",
    "Portugal" => "Lisboa"
];
function mostrarCapitales($paisesCapitales) {
    foreach ($paisesCapitales as $pais => $capital) {
        echo "La capital de $pais es $capital<br>";
    }
}

mostrarCapitales($capitales);


// 3. Extracción de datos
echo "<h2>3. Extracción de datos</h2>";
function getFirstElement($arr) {
    return $arr[0] ?? null; // Devuelve el primer elemento o null si el array está vacío usando el operador fusión de null 
}
//https://macapillaherrero.github.io/DWES/UD2Introduccion/php-operators-guide.html#operadores-especiales

echo "Primer elemento: ".getFirstElement($numeros) . "<br>";

echo "Último elemento: ".end($numeros) . "<br>";

$enteros = [3, -1, 0, 5, 7, -2];
$positivos = [];
foreach ($enteros as $valor) {
    if ($valor > 0) {
        $positivos[] = $valor;
    }
}
echo "Números positivos: ";
print_r($positivos);

// 4. Arrays multidimensionales y asociativos

echo "<h2>4. Arrays multidimensionales y asociativos</h2>";
echo "Array multidimensional:<br>";
$modulos = [
    "Programación" => "Alfonso",
    "DWES" => "Marián",
    "BD" => "Mari Carmen",
    "DIW" => "Ernesto"
];
foreach ($modulos as $modulo => $profe) {
    echo "El módulo $modulo lo imparte $profe<br>";
}

$notas = [
    "Pedro" => [7, 8, 6],
    "Lucía" => [9, 7, 8],
    "Eva" => [6, 5, 8]
];
echo "Medias de alumnos:<br>";
foreach ($notas as $alumno => $arrayNotas) {
    $media = array_sum($arrayNotas)/count($arrayNotas);
    echo "La media de $alumno es $media<br>";
}

// 5. Manipulación y ordenación
echo "<h2>5. Manipulación y ordenación</h2>";
$tecnologias = ['HTML', 'CSS', 'Javascript'];
array_splice($tecnologias, 2, 0, 'PHP');
print_r($tecnologias);

$frutas = [
    "manzana" => 1.20,
    "pera" => 1.00,
    "plátano" => 0.80
];
echo "<br>Ordenación por clave y valor:<br>";

ksort($frutas); // Ordena por clave
print_r($frutas);

asort($frutas); // Ordena por valor
print_r($frutas);


?>