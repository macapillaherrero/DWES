<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $notasAlumnos = [
            "Juanjo" => [
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

      //  $notas = ["Juan" => [8, 10,12] ,  "Ana" => [9, 10, 12], "Luis" => [ 6, 7, 5] ];

    foreach ($notasAlumnos as $alumno => $notas) {        
        $media = calcularMediaConMatriz($alumno, $notasAlumnos);      
         echo "La media con Matriz de $alumno es:  $media <br>";    

        $mejorNota = calcularMejorNota($alumno, $notasAlumnos);      
         echo "La mejor nota de $alumno es:  $mejorNota <br>";
  
    }


       
        $nombre_alumno = "Ana";
        $media = calcularMediaConMatriz($nombre_alumno, $notasAlumnos); 
        echo "La nota media de $nombre_alumno es $media <br>"; 

        echo "La mejor nota es ". calcularMejorNota($nombre_alumno, $notasAlumnos);

     

       function calcularMediaConMatriz(string $nombre_alumno ,array $notasAlumnos) {
            $notas_este_alumno = $notasAlumnos[$nombre_alumno];
            $suma = array_sum($notas_este_alumno);
            $total_notas = count($notas_este_alumno);
            $media = $suma/ $total_notas ;
            return $media;
       }

       function calcularMejorNota($nombre_alumno , $notasAlumnos){
            $mejorNota = 0; 
            $mejorModulo = "";

            foreach($notasAlumnos[$nombre_alumno] as $modulo => $nota){
                if( $nota > $mejorNota){
                    $mejorNota = $nota; 
                    $mejorModulo = $modulo; 
                }
            }
            return $mejorNota . " en ". $mejorModulo; 
       }

     

     
    ?>
</body>
</html>