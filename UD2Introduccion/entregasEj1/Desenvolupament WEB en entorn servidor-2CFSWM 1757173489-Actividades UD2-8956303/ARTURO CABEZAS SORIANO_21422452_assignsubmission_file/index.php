<?php
    /*
        Primer bloque de Actividades UD2.
        Arturo Cabezas Soriano
        Segundo de Desarrollo de Aplicaciones Web.
    */

    // Actividad 1.
    echo("<h1>Actividad 1.</h1>");
    echo("¡Hola Mundo en PHP! <br>");

    // Actividad 2. 
    echo("<h1>Actividad 2.</h1>");
    $nombre = "Arturo";
    $ano = 2025;

    echo ("Hola " . $nombre .  ". ¡Estamos en el año" . $ano . "!". "<br>");

    // Actividad 3. 
    echo("<h1>Actividad 3.</h1>");
    $num1 = 15;
    $num2 = 5;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;

    echo("El resultado de la suma es:" . $suma . "<br>");
    echo("El resultado de la resta es:" . $resta. "<br>");
    echo("El resultado de la multiplicación es: " . $multiplicacion . "<br>");


    // Actividad 4.
    /* 
        Esta actividad calcula la suma, la resta y la multiplicación de num1 y num2.

        Parámetros: 
            num1, num2: valores enteros de entrada guardados en memoria.
            suma, resta, multiplicacion: funciones que se crean y almacenan los cálculos.
            (El resultado obtenido se devuelve a la página web mediante echo()).
    */

    echo("<h1>Actividad 4.</h1>");
    echo("Hecho en Visual Studio Code. <br>");

    // Actividad 5.
    echo("<h1>Actividad 5.</h1>");

    $temperatura = 22;

    if ($temperatura > 25){
        echo("¡Bienvenido/a a la Forja, nuestro acogedor cubículo de 5x3!");
    } else {
        echo("La temperatura tampoco es agradable, pero no estás en la forja.");
    }
?>