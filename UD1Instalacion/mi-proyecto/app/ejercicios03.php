<?php
include 'actividades-clase.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; }
        h3 { border-bottom: 2px solid #333; padding-bottom: 5px; }
        table { border-collapse: collapse; margin-top: 10px; }
        td, th { border: 1px solid #ccc; padding: 8px; text-align: center; }
    </style>
</head>
<body>
<?php
    echo "<pre>";
    var_dump($matriz);
    echo "</pre>";
?>
<?php 
echo "<table>";
foreach($matriz as $fila) {
    echo "<tr>";
    foreach($fila as $valor) {        
        echo "<td>". $valor . "</td>";
    }   
    echo "</tr>";
}   
echo "</table>";

for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
?>
</body>