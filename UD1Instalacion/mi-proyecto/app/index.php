<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        echo "<h1> Hola Mundo </h1>";        
    ?>
   
    <div>
    <?php
        $foo = 10; // integer
        echo "foo ".$foo."<br>"; 
        $bar = (boolean) $foo; // boolean
        echo $bar."<br>"; 
        $str = "$foo"; // string
        echo $str."<br>";
        $fst = (string) $foo; // string
        echo $fst."<br>";
        $foo = "Hola";
        echo $foo."<br>";

        $j = "5a" . "10"; 
        echo $j."<br>";
        $p = $j - 5;
        echo $p."<br>";
    ?>
    </div>

    <!-- Comentario en HTML -->
</body>
</html>