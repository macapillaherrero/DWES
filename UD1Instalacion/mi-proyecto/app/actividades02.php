<?php
// 1. Creación e inserción
$nombres = ['Pepe', 'Rosa', 'Luis', 'María', 'Sergio'];
array_splice($nombres, 2, 0, 'Carlos'); // Inserta en la posición 2

// Mostrar el array actualizado
print_r($nombres);
echo "<br>";

//1. De otra forma 
// Crear array inicial con 5 nombres
$nombres = ['Pepe', 'Rosa', 'Luis', 'María', 'Sergio'];

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

// 2. Recorrido de arrays
$i = 0;
foreach ($nombres as $pos) {
    echo $i." Conozco a alguien llamado $pos"."<br>";
    $i++;
}



$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as $num) {
    echo $num * 2 . "<br>";
}





$arrayPaises = ['España' => 'Madrid', 'Francia' => 'París', 'Italia' => 'Roma'];


foreach ($arrayPaises as $clave => $valor) {
    echo "La capital de $clave es $valor<br>";
}




/*
// 3. Extracción de datos
function getFirstElement($arr) {
    return $arr[0] ?? null;
}
echo getFirstElement($numeros) . "<br>";

echo end($numeros) . "<br>";

$enteros = [3, -1, 0, 5, 7, -2];
$positivos = [];
foreach ($enteros as $valor) {
    if ($valor > 0) {
        $positivos[] = $valor;
    }
}
print_r($positivos);

// 4. Arrays multidimensionales y asociativos
$modulos = [
    "Programación" => "Silvia",
    "DWES" => "Macarena",
    "BD" => "Juan"
];
foreach ($modulos as $modulo => $profe) {
    echo "El módulo $modulo lo imparte $profe<br>";
}

$notas = [
    "Pedro" => [7, 8, 6],
    "Lucía" => [9, 7, 8],
    "Eva" => [6, 5, 8]
];
foreach ($notas as $alumno => $arrayNotas) {
    $media = array_sum($arrayNotas)/count($arrayNotas);
    echo "La media de $alumno es $media<br>";
}

// 5. Manipulación y ordenación
$tecnologias = ['HTML', 'CSS', 'Javascript'];
array_splice($tecnologias, 2, 0, 'PHP');
print_r($tecnologias);

$frutas = [
    "manzana" => 1.20,
    "pera" => 1.00,
    "plátano" => 0.80
];
ksort($frutas); // Ordena por clave
print_r($frutas);

asort($frutas); // Ordena por valor
print_r($frutas);
*/

?>