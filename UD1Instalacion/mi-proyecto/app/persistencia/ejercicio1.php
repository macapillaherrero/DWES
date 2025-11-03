<?php
// Definimos los colores permitidos para evitar inyecciones de código malicioso.

const COLORES_PERMITIDOS = ['Rojo' => '#ff0000', 'Verde' =>'#00ff00' , 'Azul' =>'blue', 'Negro'=> '#000000' ]; 

$color_seleccionado = COLORES_PERMITIDOS['Negro']; // Color por defecto (negro)



if (isset($_COOKIE['color_preferido']) && array_key_exists($_COOKIE['color_preferido'], COLORES_PERMITIDOS)) {
    // 3. Si no se envía formulario, leer la cookie existente
    $color_seleccionado = $_COOKIE['color_preferido'];
   
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Selector de Color</title>
    <style>
        body {
            font-family: sans-serif;
            transition: color 0.3s ease;
            color: <?= htmlspecialchars(COLORES_PERMITIDOS[$color_seleccionado]) ?>;
        }
        form { margin-top: 20px; }
        select, button { padding: 8px; font-size: 1rem; }
    </style>
</head>
<body>

    <h1>Selector de Color de Texto</h1>
    
    <p>Este texto cambiará de color según tu selección. La preferencia se guardará en una cookie.</p>

    <form action="pagina2.php" method="post">
        <label for="color">Elige un color:</label>
        <select name="color" id="color">
            <?php foreach (COLORES_PERMITIDOS as $nombre => $codigo): ?>
                <option value="<?= htmlspecialchars($nombre) ?>" <?= $color_seleccionado === $nombre ? 'selected' : '' ?>>
                    <?= htmlspecialchars($nombre) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Guardar Color</button>
    </form>

</body>
</html>