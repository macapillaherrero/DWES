<?php
// Definimos los colores permitidos para evitar inyecciones de código malicioso.
const COLORES_PERMITIDOS = ['Rojo' => '#ff0000', 'Verde' =>'#00ff00' , 'Azul' =>'#0000ff', 'Negro'=> '#000000' ]; 

$color_seleccionado = COLORES_PERMITIDOS['Negro']; // Color por defecto (negro)


if (isset($_POST['color']) && array_key_exists($_POST['color'], COLORES_PERMITIDOS)) {
    $color_post = $_POST['color'];
   
    // 2. Crear la cookie con las mejores prácticas
    $opciones = [
        'expires' => time() + (300 * 24 * 60 * 60), // Dura 30 días
        'path' => '/',
        'secure' => true,      // Solo enviar sobre HTTPS
        'httponly' => true,  // No accesible por JavaScript
        'samesite' => 'Lax'    // Política de seguridad recomendada
    ];
    setcookie('color_preferido', $color_post, $opciones);
    
    // Asignamos el color para que se aplique en esta misma carga
    $color_seleccionado =  COLORES_PERMITIDOS[$color_post];

} elseif (isset($_COOKIE['color_preferido']) && array_key_exists($_COOKIE['color_preferido'], COLORES_PERMITIDOS)) {
    // 3. Si no se envía formulario, leer la cookie existente
    $color_seleccionado = $_COOKIE['color_preferido'];
    echo  $color_seleccionado; 
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
            color: <?= htmlspecialchars($color_seleccionado) ?>;
        }
        form { margin-top: 20px; }
        select, button { padding: 8px; font-size: 1rem; }
    </style>
</head>
<body>

    <h1>Color seleccionado </h1>
    
   <a href="ejercicio1.php">Volver al selector de color</a>

</body>
</html>