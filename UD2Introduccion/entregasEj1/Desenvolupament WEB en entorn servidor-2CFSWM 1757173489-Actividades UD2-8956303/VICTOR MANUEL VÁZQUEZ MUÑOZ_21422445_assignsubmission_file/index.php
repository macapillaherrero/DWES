<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Ejercicio 1 -->
    <?php
        echo "<h1>Ejercicio 1</h1>";
        echo "¡Mi primer script en PHP!";
    ?>

    <div>
        <!-- Ejercicio 2 -->
        <?php
           echo "<h1>Ejercicio 2</h1>";
           $nombre = "Víctor Vázquez Muñoz";
           $anio = 2025;
           echo "Hola, ". $nombre ." ¡Estamos en el año ". $anio ."!<br>";
        ?>
        <br>
        <!-- Ejercicio 3 -->
        <?php
           echo "<h1>Ejercicio 3</h1>";
           $num1 = 15;
           $num2 = 5;
           echo "La suma es: ". $num1 + $num2 ."<br>";
           echo "La resta es: ". $num1 - $num2 ."<br>";
           echo "La multipilcación es: ". $num1 * $num2 ."<br>";
        ?>
        <br>
        <!-- Ejercicio 4 -->
        <?php /* El proposito de este ejercicio es definir dos variables integer y con los echo poder mostrar en pantalla la suma, la resta y la multiplicación. */
           echo "<h1>Ejercicio 4</h1>";
           // Definimos el primer entero
           $num1 = 15;
           // Definimos el segundo entero 
           $num2 = 5;
           // Hacemos un echo concatenando las variables con el texto y sumando las dos variables
           echo "La suma es: ". $num1 + $num2 ."<br>";
           // Hacemos un echo concatenando las variables con el texto y restando las dos variables
           echo "La resta es: ". $num1 - $num2 ."<br>";
           // Hacemos un echo concatenando las variables con el texto y multiplicando las dos variables
           echo "La multipilcación es: ". $num1 * $num2 ."<br>";
        ?>
        <br>
        <!-- Ejercicio 5 -->
        <?php
        echo "<h1>Ejercicio 5</h1>";
        $temperatura = 22;

        if ($temperatura < 25) {
            echo "La temperatura es agradable";
        } else {
            echo "¡Que calor! Estamos en la forja.";
        }

        ?>
    </div>
</body>
</html>