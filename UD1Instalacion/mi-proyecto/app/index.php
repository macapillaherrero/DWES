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
</body>
</html>