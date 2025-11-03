<?php
// Cookie que dura 1 hora, disponible en todo el sitio,
// solo por HTTPS, no accesible por JS y con política SameSite estricta.
$nombre_cookie = 'usuario_preferencias';
$valor_cookie = json_encode(['tema' => 'oscuro', 'idioma' => 'es']);
$opciones = [
    'expires' => time() + 3600, // 1 hora
    'path' => '/',
    // 'domain' => '.tudominio.com', // Descomentar si es necesario
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
];

setcookie($nombre_cookie, $valor_cookie, $opciones);

// Cookie que se borra al cerrar el navegador
setcookie('visita_temporal', '1');
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Página con Cookies</h1>
    <p>Se han configurado las cookies.</p>
</body>
</html>
