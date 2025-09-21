
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//echo "¡Hola desde Docker! 🐳<br>";
//echo "La versión de PHP es: " . phpversion();

echo "<h2>Actividad 1</h2>";
echo "¡Mi primer script en PHP!";
echo "<br>";

echo "<h2>Actividad 2: Jugando con Variables</h2>";
$nombre = "Alba";
$año = "2025";

echo  " Hola, $nombre ¡Estamos en el año $año!";
echo "<br>";

echo "<h2>Actividad 3: Calculadora Sencilla</h2>";
// Actividad 4: Uso de Comentarios
/* 
   Calculadora Sencilla en PHP
   Este script hace operaciones sencillas (suma, resta y multiplicación) 
   con dos variables y muestra los resultados en pantalla.
*/

// Declaramos variables 
$num1 = 15;
$num2 = 5;
// Operación de suma
$suma = $num1 + $num2;
// Operación de resta
$resta= $num1 - $num2;
// Operación de multiplicacion
$multiplicacion = $num1*$num2;

// Mostrar resultados en pantalla
echo "La suma es: $suma";
echo "<br>";
echo "La resta es: $resta";
echo "<br>";
echo "La multiplicacion es: $multiplicacion";
echo "<br>";

echo "<h2>Actividad 5: Condicional Básico</h2>";
$temperatura = 22;
if ($temperatura > 25){
    echo "¡Qué calor!";
} else {
    echo "La temperatura es agradable.";
}


?>
    
</body>
</html>