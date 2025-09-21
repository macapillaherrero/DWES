<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // Actividad 1: Mi Primer Script PHP //

    echo "<h1>¡Mi primer script en PHP!</h1>";

    ?>

    <?php
        //Actividad 2: Jugando con Variables//
    $nombre = "Iker";
    $abril = "2006";
    echo "Hola soy , ".$nombre." y soy del año "."$abril"."<br>";    
    ?>

    <?php
        /*Actividad 3: Calculadora Sencilla*/
        $numero1 = "15";
        $numero2 = "5";
        $suma = $numero1 + $numero2; //suma
        $resta = $numero1 - $numero2; //resta
        $multiplicacion = $numero1 * $numero2; //multiplicacion
        echo "La suma es:".$suma."<br>";
        echo "La resta es:".$resta."<br>";
        echo "La multiplicacion es:".$multiplicacion."<br>";
    ?>

    <?php
  
    $temperatura = 22;

    if ($temperatura > 25) {
        echo "¡Qué calor!";
    } else {
        echo "La temperatura es agradable.";
    }
        
?>
</body>
</html>