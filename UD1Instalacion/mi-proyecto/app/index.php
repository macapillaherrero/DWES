<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <a href="formularios.php">Ir a Formularios</a><br>
   <a href="soluciones-actividades-arrays03/index.php">Soluciones Actividades arrays 02</a><br>
   <a href="soluciones-actividades-arrays03/index.php">Ir a Soluciones Actividades Arrays 03</a><br>
  <a href="soluciones-actividades-arrays04/index.php">Ir a Soluciones Actividades Arrays 04</a><br>
  <a href="soluciones-actividades-arrays05/index.php">Ir a Soluciones Actividades Arrays 05</a><br> 
      <?php
       $x = 10;
        $a = &$x; // referencia
        $b = &$a; // referencia
        $c = $a;  // valor
        $b = 6;
        $x = 20;
        echo "$a, $b, $c, $x" ; // 6, 6, 5
      ?>
    

    <!-- Comentario en HTML -->


    <!Variables globales y locales en funciones-->

      <?php

        $GLOBALS['var_nueva'] = 5; 
        $var_global = 1;
        function test() {
          echo "<br> var_global dentro : ";
          global $var_global;
          echo $var_global;
        }
        test();
        echo "<br> var_global fuera : ";
        echo $GLOBALS['var_global'];
        echo "<br> var_nueva fuera : ";
        echo $GLOBALS['var_nueva'];
         echo "<br> var_nueva : ";
        echo $var_nueva; // Notice: Undefined variable

       ?>

      <?php
        function contador() {
          static $count = 0; 
          $count++;
          echo $count;
          $count = 25;
          echo $count;
        }
        echo "<br> Contador: ";
        contador(); 
        echo "<br> Contador: ";
        contador(); 
      ?>
        
</body>
</html>