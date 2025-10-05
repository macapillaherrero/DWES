<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// 1. Matriz de empleados
$empleados = [
    ['nombre' => 'Ana', 'edad' => 28, 'salario' => 3000],
    ['nombre' => 'Luis', 'edad' => 35, 'salario' => 4000],
    ['nombre' => 'Marta', 'edad' => 32, 'salario' => 3500],
    ['nombre' => 'Carlos', 'edad' => 25, 'salario' => 2800],
    ['nombre' => 'Lucía', 'edad' => 40, 'salario' => 4500],
];

// 2. Función con nombre para el filtro
// Esta función será el "callback" para array_filter
function esMayorDe30($empleado) {
    return $empleado['edad'] > 30;
}

// 3. Función con nombre para la transformación
// Esta función será el "callback" para array_map
function transformarEmpleado($empleado) {
    return [
        'nombre' => strtoupper($empleado['nombre']),
        'salario_incrementado' => $empleado['salario'] * 1.10
    ];
}

// 4. Aplicar array_filter, pasando el nombre de la función como un string
$empleadosMayoresDe30 = array_filter($empleados, 'esMayorDe30');

// 5. Aplicar array_map sobre el resultado anterior
$resultadoFinal = array_map('transformarEmpleado', $empleadosMayoresDe30);

// 6. Muestra el resultado final
echo "<pre>";
print_r($resultadoFinal);
echo "</pre>";

/*
Salida esperada:
Array
(
    [1] => Array
        (
            [nombre] => LUIS
            [salario_incrementado] => 4400
        )

    [2] => Array
        (
            [nombre] => MARTA
            [salario_incrementado] => 3850
        )

    [4] => Array
        (
            [nombre] => LUCÍA
            [salario_incrementado] => 4950
        )
)
*/

?>


</body>
</html>