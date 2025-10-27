<p>IES CAMP DE MORVEDRE</p>
<p>Prof:<a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>
---

# Ejercicios de Persistencia con Cookies y Sesiones

A continuación se presentan los ejercicios extraídos del material de estudio, junto con sus soluciones actualizadas y comentadas para PHP 8.3.

***

### Ejercicio 1: Selector de Color con Cookies

**Enunciado:** Escriba una página que cambie el color de la letra según el color indicado por el usuario y que conste de dos páginas.

* En la primera página se elige el color y hay un enlace a la segunda página.
* En la segunda página se muestra el texto en el color elegido en la primera página, y hay un enlace a la primera página.


#### Solución Actualizada (PHP 8.3)

Se unifican ambas páginas en una sola para una mejor gestión, pero manteniendo la lógica de selección y visualización.

**`selector_color.php`**

```php
<?php
// Definimos los colores permitidos para evitar inyecciones de código malicioso.
const COLORES_PERMITIDOS = ['#ff0000' => 'Rojo', '#00ff00' => 'Verde', '#0000ff' => 'Azul'];
$color_seleccionado = '#000000'; // Color por defecto (negro)

// 1. Procesar la selección del formulario
if (isset($_POST['color']) && array_key_exists($_POST['color'], COLORES_PERMITIDOS)) {
    $color_post = $_POST['color'];
    
    // 2. Crear la cookie con las mejores prácticas
    $opciones = [
        'expires' => time() + (30 * 24 * 60 * 60), // Dura 30 días
        'path' => '/',
        'secure' => true,      // Solo enviar sobre HTTPS
        'httponly' => true,  // No accesible por JavaScript
        'samesite' => 'Lax'    // Política de seguridad recomendada
    ];
    setcookie('color_preferido', $color_post, $opciones);
    
    // Asignamos el color para que se aplique en esta misma carga
    $color_seleccionado = $color_post;

} elseif (isset($_COOKIE['color_preferido']) && array_key_exists($_COOKIE['color_preferido'], COLORES_PERMITIDOS)) {
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
            color: <?= htmlspecialchars($color_seleccionado) ?>;
        }
        form { margin-top: 20px; }
        select, button { padding: 8px; font-size: 1rem; }
    </style>
</head>
<body>

    <h1>Selector de Color de Texto</h1>
    
    <p>Este texto cambiará de color según tu selección. La preferencia se guardará en una cookie.</p>

    <form action="selector_color.php" method="post">
        <label for="color">Elige un color:</label>
        <select name="color" id="color">
            <?php foreach (COLORES_PERMITIDOS as $codigo => $nombre): ?>
                <option value="<?= htmlspecialchars($codigo) ?>" <?= $color_seleccionado === $codigo ? 'selected' : '' ?>>
                    <?= htmlspecialchars($nombre) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Guardar Color</button>
    </form>

</body>
</html>
```


***

### Ejercicio 2: Ciclo de Vida de una Cookie

**Enunciado:** Escriba una página que permita crear una cookie de duración limitada, comprobar el estado de la cookie y destruirla.

#### Solución Actualizada (PHP 8.3)

Se crea una única página que gestiona las tres acciones (crear, comprobar, destruir) basándose en los datos enviados por un formulario.

**`gestor_cookie.php`**

```php
<?php
$mensaje = 'No hay ninguna acción pendiente.';
$estado_cookie = 'La cookie "cookie_temporal" no existe.';

// --- LÓGICA DE ACCIONES (ANTES DE CUALQUIER HTML) ---

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'] ?? '';

    // Acción para CREAR la cookie
    if ($accion === 'crear') {
        $duracion = filter_input(INPUT_POST, 'duracion', FILTER_VALIDATE_INT, [
            "options" => ["min_range" => 1, "max_range" => 60]
        ]);

        if ($duracion) {
            $expiracion = time() + $duracion;
            $opciones = [
                'expires' => $expiracion,
                'path' => '/',
                'secure' => true,
                'httponly' => true,
                'samesite' => 'Lax'
            ];
            setcookie('cookie_temporal', "Creada a las " . date('H:i:s'), $opciones);
            $mensaje = "Cookie creada con éxito. Durará {$duracion} segundos.";
            // Forzamos la recarga para que la cookie esté disponible para su lectura
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $mensaje = 'Error: la duración debe ser un número entre 1 y 60.';
        }
    }

    // Acción para DESTRUIR la cookie
    if ($accion === 'destruir') {
        if (isset($_COOKIE['cookie_temporal'])) {
            // Se destruye poniendo una fecha de expiración en el pasado
            $opciones_borrado = [
                'expires' => time() - 3600,
                'path' => '/',
                'secure' => true,
                'httponly' => true,
                'samesite' => 'Lax'
            ];
            setcookie('cookie_temporal', '', $opciones_borrado);
            $mensaje = 'Cookie destruida con éxito.';
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $mensaje = 'No se puede destruir una cookie que no existe.';
        }
    }
}

// --- LÓGICA DE COMPROBACIÓN (para mostrar el estado) ---
if (isset($_COOKIE['cookie_temporal'])) {
    $valor = htmlspecialchars($_COOKIE['cookie_temporal']);
    $estado_cookie = "La cookie existe. Valor: '{$valor}'.";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Ciclo de Vida Cookie</title>
</head>
<body>
    <h1>Gestión de Cookies</h1>

    <div style="background: #f0f0f0; padding: 10px; border-radius: 5px;">
        <p><strong>Mensaje:</strong> <?= htmlspecialchars($mensaje) ?></p>
        <p><strong>Estado Actual:</strong> <?= $estado_cookie ?></p>
    </div>

    <hr>

    <h3>Crear Cookie</h3>
    <form action="gestor_cookie.php" method="post">
        <label for="duracion">Duración (1-60 segundos):</label>
        <input type="number" name="duracion" id="duracion" min="1" max="60" value="30" required>
        <button type="submit" name="accion" value="crear">Crear Cookie</button>
    </form>

    <hr>

    <h3>Destruir Cookie</h3>
    <form action="gestor_cookie.php" method="post">
        <button type="submit" name="accion" value="destruir">Destruir Cookie</button>
    </form>
</body>
</html>
```


***

### Ejercicio 3, 4 y 5: Registro de Usuario y Contador de Visitas

**Enunciado (combinado):**

* Crear `inicio.html` que solicite nombre, dirección y DNI.
* `entrada.php` valida los datos y los guarda en cookies.
* `visita.php` saluda al usuario con los datos de las cookies y cuenta las visitas. Si el usuario es desconocido, lo redirige a `inicio.html`.
* Poner fecha de caducidad a las cookies.


#### Solución Actualizada (PHP 8.3)

Se crean los 3 ficheros solicitados con la lógica actualizada.

**`inicio.html`**

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <p>Por favor, introduce tus datos para continuar.</p>
    <form action="entrada.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="direccion" required><br><br>
        
        <label for="dni">DNI:</label><br>
        <input type="text" id="dni" name="dni" required pattern="[0-9]{8}[A-Za-z]"><br><br>
        
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
```

**`entrada.php`**

```php
<?php
// Validar que todos los campos han sido enviados y no están vacíos
if (
    !empty($_POST['nombre']) && 
    !empty($_POST['direccion']) && 
    !empty($_POST['dni'])
) {
    // Limpiamos los datos para seguridad
    $nombre = htmlspecialchars($_POST['nombre']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $dni = htmlspecialchars($_POST['dni']);

    // Guardamos los datos en un array y lo codificamos en JSON. Es mejor que usar 3 cookies.
    $datos_usuario = json_encode([
        'nombre' => $nombre,
        'direccion' => $direccion,
        'dni' => $dni
    ]);
    
    // Opciones para las cookies (1 año de duración)
    $opciones = [
        'expires' => time() + (365 * 24 * 60 * 60),
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax'
    ];

    setcookie('datos_usuario', $datos_usuario, $opciones);
    setcookie('contador_visitas', '1', $opciones); // Inicializamos el contador

    // Redirigimos a la página de visita
    header('Location: visita.php');
    exit();

} else {
    // Si faltan datos, redirigimos de vuelta al inicio
    header('Location: inicio.html');
    exit();
}
?>
```

**`visita.php`**

```php
<?php
// Comprobar si existen las cookies de usuario y contador
if (isset($_COOKIE['datos_usuario']) && isset($_COOKIE['contador_visitas'])) {
    
    // Leer y decodificar los datos del usuario
    $datos_usuario = json_decode($_COOKIE['datos_usuario'], true);
    $nombre = $datos_usuario['nombre'] ?? 'Usuario Desconocido';
    
    // Leer el contador y aumentarlo
    $contador = (int)$_COOKIE['contador_visitas'];
    $nuevo_contador = $contador + 1;
    
    // Actualizar la cookie del contador
    $opciones = [
        'expires' => time() + (365 * 24 * 60 * 60),
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax'
    ];
    setcookie('contador_visitas', (string)$nuevo_contador, $opciones);

} else {
    // Si no hay cookies, redirigir al registro
    header('Location: inicio.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Visita</title>
</head>
<body>
    <h1>¡Bienvenido de nuevo, <?= htmlspecialchars($nombre) ?>!</h1>
    <p>Esta es tu visita número: <strong><?= $nuevo_contador ?></strong>.</p>
    <p><a href="inicio.html">Volver a registrarse (borrará cookies al enviar)</a></p>
</body>
</html>
```


***

### Ejercicio 6: Rehacer con Sesiones

**Enunciado:** Realizar los dos primeros ejercicios mediante el uso de sesiones.

#### Solución para el Ejercicio 1 (Selector de Color con Sesiones)

La lógica es similar, pero en lugar de `setcookie()` y `$_COOKIE`, usamos `session_start()` y `$_SESSION`.

**`selector_color_sesion.php`**

```php
<?php
// Iniciar la sesión SIEMPRE al principio del script
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

const COLORES_PERMITIDOS = ['#ff0000' => 'Rojo', '#00ff00' => 'Verde', '#0000ff' => 'Azul'];
$color_seleccionado = '#000000';

// Procesar la selección
if (isset($_POST['color']) && array_key_exists($_POST['color'], COLORES_PERMITIDOS)) {
    $_SESSION['color_preferido'] = $_POST['color'];
    $color_seleccionado = $_POST['color'];
} elseif (isset($_SESSION['color_preferido']) && array_key_exists($_SESSION['color_preferido'], COLORES_PERMITIDOS)) {
    // Leer de la sesión si existe
    $color_seleccionado = $_SESSION['color_preferido'];
}

// Para "reiniciar", podríamos tener un enlace a ?reset=1
if (isset($_GET['reset'])) {
    unset($_SESSION['color_preferido']);
    header('Location: selector_color_sesion.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- El HTML es idéntico al de la versión con cookies -->
</head>
<body>
    <h1>Selector de Color (Versión Sesión)</h1>
    <!-- El formulario y el contenido son idénticos -->
    <a href="?reset=1">Reiniciar color</a>
</body>
</html>
```

**Ventaja:** La preferencia de color solo durará mientras el navegador esté abierto, lo cual es típico de las sesiones. No persiste entre cierres del navegador a menos que se configure el `session lifetime`.
<span style="display:none">[^1]</span>

<div align="center">⁂</div>

[^1]: PersistenciaCookies-Parte1.pdf

