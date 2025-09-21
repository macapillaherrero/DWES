<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Ejercicio 1</h1>";
        echo "¡Mi primer script en PHP!";

        echo "<h1>Ejercicio 2</h1>";
        $anyo = 2025;
        $nombre = "Jacinto";
        echo "Hola $nombre, estamos en el año $anyo";

        echo "<h1>Ejercicio 3</h1>";
        $num1 = 12;
        $num2 = 5;
        echo "La suma es: " . ($num1 + $num2) . "<br>";
        echo "La resta es: " . ($num1 - $num2) . "<br>";
        echo "La multiplicación es: " . ($num1 * $num2) . "<br>";
        echo "La división es: " . ($num1 / $num2);

        echo "<h1>Ejercicio 4</h1>";
        echo "Hecho en el visual";
        /* 
        $num1 = 12;
        $num2 = 5;
        echo "La suma es: " . ($num1 + $num2) . "<br>"; // esto suma
        echo "La resta es: " . ($num1 - $num2) . "<br>"; // esto resta
        echo "La multiplicación es: " . ($num1 * $num2) . "<br>"; // esto multiplica
        echo "La división es: " . ($num1 / $num2); */ // esto divide

        echo "<h1>Ejercicio 5</h1>";
        $temperatura = 22;
        if ($temperatura > 25) {
            echo "El diablo papi, que calor hace en la forja <br>";
        } else {
            echo "Estas fuera de la forja seguro <br>";
        }
        $temperatura = 30;
        if ($temperatura > 25) {
            echo "El diablo papi, que calor hace en la forja";
        } else {
            echo "Estas fuera de la forja seguro";
        }
    ?>
    
</body>
</html>