<?php include 'actividades03.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Soluciones a Ejercicios PHP</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; }
        h3 { border-bottom: 2px solid #333; padding-bottom: 5px; }
        table { border-collapse: collapse; margin-top: 10px; }
        td, th { border: 1px solid #ccc; padding: 8px; text-align: center; }
    </style>
</head>
<body>

    <h1>Soluciones de Ejercicios PHP</h1>

    <h3>1. Meses del año invertidos</h3>
    <p style="font-weight: bold;">Crea un array con los meses del año ordenados: “enero, febrero…” Dale la vuelta para que queden de este modo: “diciembre, noviembre…”.</p>
    <p><b>Original:</b> <?php echo implode(', ', $meses); ?></p>
    <p><b>Invertido:</b> <?php echo implode(', ', $meses_invertidos); ?></p>

    <h3>2. Bucle de meses</h3>
    <p style="font-weight: bold;">Crea un bucle que, sin salirse del array, muestre los meses uno debajo del otro, empezando desde enero.</p>
    
    <?php
    foreach ($meses as $mes) {
        echo $mes . "<br>";
    }
    ?>

    <h3>3. Array de 10 números aleatorios ordenados (mayor a menor)</h3>
    <p><?php echo implode(', ', $numeros_aleatorios); ?></p>

    <h3>4. Crea un array con los meses del año, saca enero y febrero del array y añádelos al final del mismo.</h3>
    <p><?php echo implode(', ', $meses_modificado); ?></p>

    <h3>5. Array con números pares del 0 al 20</h3>
    <p><?php echo implode(', ', $numeros_pares); ?></p>

    <h3>6. Factorial de los números pares</h3>
    <ul>
    <?php
    foreach ($factoriales as $numero => $factorial) {
        echo "<li>Factorial de <strong>$numero</strong> es $factorial</li>";
    }
    ?>
    </ul>

    <h3>7. Análisis del array de edades</h3>
    <p><b>Edades:</b> <?php echo implode(', ', $edades); ?></p>
    <ul>
        <li>¿Están todas las edades entre 18 y 65? <strong><?php echo $todas_en_rango ? 'Sí' : 'No'; ?></strong></li>
        <li>¿Hay alguna edad mayor de 67? <strong><?php echo $hay_mayor_67 ? 'Sí' : 'No'; ?></strong></li>
        <li>¿Hay alguna edad menor de 15? <strong><?php echo $hay_menor_15 ? 'Sí' : 'No'; ?></strong></li>
        <li>La edad menor es <strong><?php echo $edad_menor; ?></strong> y está en la posición <strong><?php echo $posicion_menor; ?></strong>.</li>
    </ul>

    <h3>8. Matriz de 6x5 con números aleatorios</h3>
    <table>
        <?php
        foreach ($matriz as $fila) {
            echo "<tr>";
            foreach ($fila as $valor) {
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
