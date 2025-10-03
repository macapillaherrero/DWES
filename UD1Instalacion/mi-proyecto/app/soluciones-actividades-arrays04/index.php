<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soluciones Actividades Arrays 04</h1>
    <?php
        const IMAGENES = 8;
       
        for ($i = 1; $i <= IMAGENES; $i++) {
           
            if( $i % 2 != 0){
              
               echo "<div style='display:flex;'>";
               echo "<img src='imagenes/$i.jpg' alt='Imagen $i' style='width:100px;height:100px;margin:5px;'>";
                
            }else{
                
                echo "<img src='imagenes/$i.jpg' alt='Imagen $i' style='width:100px;height:100px;margin:5px;'>";
                echo "</div>";
            }
           
         }
    ?>
</body>
</html>

