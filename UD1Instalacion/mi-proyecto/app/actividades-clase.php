<?php
$matriz = []; 
const FILAS = 6;
const COLUMNAS = 5;
for ($i = 0; $i < FILAS; $i++) {
    for ($j = 0; $j < COLUMNAS; $j++) {
        $matriz[$i][$j] =  rand(1, 100) ; 
    }
}

?>