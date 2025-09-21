<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
">
    <title>Mi Proyecto PHP</title>
</head>
<body>
    <?php
        //actividad 1
        echo "<p>¡Mi primer script en PHP!</p> <br>";

        //actividad 2
        $nombre = "Miguel";
        $anyo = 2025;
        echo "<p>Hola, $nombre ¡estamos en el año $anyo!</p> <br>";

        //actividad 3
        $num1 = 15;
        $num2 = 5;

        $resultado = $num1 + $num2;
        echo "<p>La suma es: $resultado</p>";

        $resultado = $num1 - $num2;
        echo "<p>La resta es: $resultado</p>";

        $resultado = $num1 * $num2;
        echo "<p>La multiplicación es: $resultado</p> <br>";

        //actividad 4
        /*
         * programa sencillo que realiza 3 operaciones
         * suma, resta y multiplicación con dos variables
        */

        //Variables que usaremos para hacer las operaciones
        $num1 = 15;
        $num2 = 5;

        //Suma
        $resultado = $num1 + $num2;
        echo "<p>La suma es: $resultado</p>";

        //Resta
        $resultado = $num1 - $num2;
        echo "<p>La resta es: $resultado</p>";

        //Multiplicación
        $resultado = $num1 * $num2;
        echo "<p>La multiplicación es: $resultado</p> <br>";


        //actividad 5

        //Definimos la variable temperatura
        $temperatura = 22;
        //Condicional para mostrar mensaje según la temperatura
        if ($temperatura > 25) {
            echo "<p>¡Qué calor!</p>";
        } else {
            echo "<p>La temperatura es agradable.</p>";
        }
    ?>
</body>
</html>



