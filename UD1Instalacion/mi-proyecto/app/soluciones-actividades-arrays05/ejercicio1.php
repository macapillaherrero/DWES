<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$notasAlumnos = [
    "Juan" => [
        "Desarrollo Web en Entorno Servidor" => 8,
        "Desarrollo Web en Entorno Cliente" => 7,
        "Despliegue de Aplicaciones Web" => 9,
        "Diseño de Interfaces Web" => 6
    ],
    "Ana" => [
        "Desarrollo Web en Entorno Servidor" => 10,
        "Desarrollo Web en Entorno Cliente" => 9,
        "Despliegue de Aplicaciones Web" => 8,
        "Diseño de Interfaces Web" => 9
    ],
    "Luis" => [
        "Desarrollo Web en Entorno Servidor" => 6,
        "Desarrollo Web en Entorno Cliente" => 7,
        "Despliegue de Aplicaciones Web" => 5,
        "Diseño de Interfaces Web" => 7
    ]
];    

/*Para que muestre las notas de todos los alumnos/as */
    foreach ($notasAlumnos as $alumno => $notas) {        
        $media = calcularMediaConMatriz($alumno, $notasAlumnos);      
         echo "La media con Matriz de $alumno es:  $media <br>";
        $media = calcularMediaSinMatriz($alumno);      
         echo "La media sin Matriz de $alumno es:  $media <br>";
        $media = calcularMediaConNotas($notas);      
         echo "La media pasando solo notas de $alumno es:  $media <br>";
        $mejorNota = calcularMejorNota($alumno, $notasAlumnos);      
         echo "La mejor nota de $alumno es:  $mejorNota <br>";
       
    }
/*Para que muestre las notas solo del alumno/a solicitado  */
    echo "<br> Solo de un alumno/a <br>";
    $alumno = "Juan";
    $notas = $notasAlumnos[$alumno];
        $media = calcularMediaConMatriz($alumno, $notasAlumnos);      
         echo "La media con Matriz de $alumno es:  $media <br>";
        $media = calcularMediaSinMatriz($alumno);      
         echo "La media sin Matriz de $alumno es:  $media <br>";
        $media = calcularMediaConNotas( $notas);      
         echo "La media pasando solo notas de $alumno es:  $media <br>";
        $mejorNota = calcularMejorNota($alumno, $notasAlumnos);      
         echo "La mejor nota de $alumno es:  $mejorNota <br>";

    /*El ejercicio me pide solo con el nombre del alumno, 
    pero necesito la matriz para poder acceder a las notas o las notas*/ 
    function calcularMediaConMatriz($nombre_alumno , $matriz) {
        $notas = $matriz[$nombre_alumno];
        $suma = array_sum($notas);
        //echo $suma;
        $cantidad = count($notas);
       // echo $cantidad; 
        return $suma / $cantidad;
    }

    /*Si no puedo pasar la matriz puedo hacer que sea global, pero esto sería una mala práctica puesto 
    que da libre acceso a la matriz desde todos los sitios*/
    function calcularMediaSinMatriz($nombre_alumno ) {
        global $notasAlumnos;
        $matriz = $notasAlumnos;
        $notas = $matriz[$nombre_alumno];
        $suma = array_sum($notas);
        //echo $suma;
        $cantidad = count($notas);
       // echo $cantidad; 
        return $suma / $cantidad;
    }

    /*Otra forma de hacerlo es pasar directamente las notas de un alumno
    aunque el enunciado pedía el nombre explícitamente */
    function calcularMediaConNotas($notas) {
        $suma = array_sum($notas);
        //echo $suma;
        $cantidad = count($notas);
        //echo $cantidad; 
        return $suma / $cantidad;
    }

    /*El cálculo de la mejor nota, prefiero hacerlo en otra función
    las funciones tienen que hacer solo una cosa, aunque en el enunciado ponga que hay que 
    hacerlo todo junto, sería una mala práctica*/

    function calcularMejorNota($nombre_alumno , $matriz) {
        $mejorNota = 0; 
        $mejorModulo = "";
        foreach ($matriz[$nombre_alumno] as $modulo => $nota) {
           
            if ($nota > $mejorNota) {
                $mejorNota = $nota;
                $mejorModulo = $modulo;
            }
        }
        return $mejorNota . " en " . $mejorModulo; 

    }
    ?>
</body>
</html>