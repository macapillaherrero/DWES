<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <a href="formularios.php">Ir a Formularios</a><br>
   <a href="soluciones-actividades-arrays02/index.php">Ir a Soluciones Actividades Arrays 02</a><br>
   <a href="soluciones-actividades-arrays03/index.php">Ir a Soluciones Actividades Arrays 03</a><br>
   <a href="soluciones-actividades-arrays04/index.php">Ir a Soluciones Actividades Arrays 04</a><br>
   <a href="soluciones-actividades-arrays05/index.php">Ir a Soluciones Actividades Arrays 05</a><br> 
   <a href="objetos/ejemplo-objetos.php">Objetos</a><br> 
   <a href="formularios/php-server.php">Variables de servidor</a><br>
   <a href="formularios/formulario-test.php">Formulario Test</a><br> 
   <a href="formularios/ejercicio-clase/formulario-clase.php">Formulario corregido en clase</a><br> 
   <a href="conectabd.php">Conexión a Bases de datos</a><br> 

    <!-- Referencias y referencias múltiples -->

<?php
      /* $x = 10;
        $a = &$x; // referencia
        $b = &$a; // referencia
        $c = $a;  // valor
        $b = 6;
        $x = 20;
        echo "$a, $b, $c, $x" ; // 6, 6, 5

      */
      ?>
    

    <!-- Comentario en HTML -->


    <!Variables globales y locales en funciones-->

      <?php
  /*
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
*/
       ?>

      <?php

      /*
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

        */
      ?>
        


<?php
class Usuario {
    public ?Direccion $direccion = null;
}
class Direccion {
    public function getCalle(): string {
        return "Calle Falsa 123";
    }
}

$usuario = new Usuario();

// Sin nullsafe, esto daría un error si $usuario->direccion es null
// $calle = $usuario->direccion->getCalle(); 

// Con nullsafe, $calle será null y no habrá error
$calle = $usuario->direccion?->getCalle();

var_dump($calle); // NULL
?>



<?php
$numeros = [1, 2, 3, 4];

// Forma tradicional con función anónima
$dobles_tradicional = array_map(function($n) {
    return $n * 2;
}, $numeros);

// Forma moderna con Arrow Function
$dobles_flecha = array_map(fn($n) => $n * 2, $numeros);
echo "<pre>";
var_dump($dobles_tradicional); // [2, 4, 6, 8]
var_dump($dobles_flecha); // [2, 4, 6, 8]
echo "</pre>";
?>
            
            
</body>
</html>