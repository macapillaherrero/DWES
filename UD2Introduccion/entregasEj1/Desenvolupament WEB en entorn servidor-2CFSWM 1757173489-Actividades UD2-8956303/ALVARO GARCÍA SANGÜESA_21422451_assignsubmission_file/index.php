
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acividades</title>
</head>
<body>
    <!-- ACTIVIDAD 1 -->
      <h2>ACTIVIDAD 1</h2>
    <?php
    echo "<h1> ¡Mi primer script en PHP! </h1>";
    ?>

    <!-- EJEMPLOS -->
     
 
    <?php
    /*
    $foo = 10; // integer
    echo "foo".$foo." <br>";

    $bar = (boolean) $foo; // boolean

    $str = "$foo"; // string
    $fst = (string) $foo; // string
    */
?>


<br>
 <h2>ACTIVIDAD 2</h2>

<?php
$nombre = "Álvaro";
$anyo = 2025;

echo "Hola, ".$nombre.". ¡Estamos en el año ".$anyo."!";
?>

<br>
<br>

<!-- ACTIVIDAD 3 -->
  <h2>ACTIVIDAD 3</h2>

<?php
$num1 = 15;
$num2 = 5;

echo "La suma es: ".($num1+$num2)."<br>";
echo "La resta es: ".($num1-$num2)."<br>";
echo "La multiplicación es: ".($num1*$num2)."<br>"; 
?>

<br>
<br>

<!-- ACTIVIDAD 4 -->
  <h2>ACTIVIDAD 4</h2>
<?php
/* 
Instrucciones:

Define dos variables numéricas, $num1 con el valor 15 y $num2 con el valor 5.
Calcula la suma, la resta y la multiplicación de ambas variables.
Muestra cada resultado en una línea nueva, precedido de un texto descriptivo. (Pista: puedes usar <br> para los saltos de línea en HTML).
*/

// Definición de variables numéricas
$num1 = 15; // Primer número
$num2 = 5;  // Segundo número

// Sumamos $num1 y $num2
echo "La suma es: " . ($num1 + $num2) . "<br>";

// Restamos  $num1 menos $num2
echo "La resta es: " . ($num1 - $num2) . "<br>";

// Multiplicamos $num1 por $num2
echo "La multiplicación es: " . ($num1 * $num2);
?>

<br>
<br>
 <h2>ACTIVIDAD 5</h2>
<?php
$temperatura = 22;

if($temperatura > 25){
    echo "¡Que calor!";
}else{
    echo "La temperatura es agradable";
}
?>
   
</body>
</html>