<?php
// 1. DEFINICIÓN DE CREDENCIALES Y VARIABLES
// Usamos constantes para las credenciales, ya que son valores fijos.
define('USER_CORRECTO', 'admin');
define('PASS_CORRECTO', '1234');

// Inicializamos las variables que usaremos en el script.
$usuario = ''; // Para guardar el nombre de usuario introducido.
$errores = []; // Un array para almacenar los mensajes de error.
$mensaje = ''; // Para el mensaje final de éxito o de credenciales incorrectas.

// 2. COMPROBACIÓN DEL MÉTODO DE ENVÍO
// El código de dentro solo se ejecuta si el formulario ha sido enviado por POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. RECOGIDA Y LIMPIEZA DE DATOS
    // Recogemos los datos, usamos trim() para eliminar espacios y el operador '??' como atajo
    // para asignar un string vacío si el campo no existe, evitando warnings.
    $usuario = trim($_POST['usuario'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // 4. VALIDACIÓN DE LOS CAMPOS
    if (empty($usuario)) {
        $errores['usuario'] = 'El nombre de usuario es obligatorio.';
    }
    if (empty($password)) {
        $errores['password'] = 'La contraseña es obligatoria.';
    }

    // 5. LÓGICA DE AUTENTICACIÓN
    // Si el array de errores está vacío, significa que los campos están rellenos.
    if (empty($errores)) {
        if ($usuario === USER_CORRECTO && $password === PASS_CORRECTO) {
            // Si las credenciales son correctas, preparamos un mensaje de bienvenida.
            $mensaje = "<p style='color: green;'>¡Bienvenido, " . htmlspecialchars($usuario) . "!</p>";
            // En una aplicación real, aquí haríamos una redirección a una página privada.
        } else {
            // Si no, el error es de credenciales incorrectas.
            $mensaje = "<p style='color: red;'>Usuario o contraseña incorrectos.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad: Formulario de Autenticación</title>

    <style>
    /* Estilo para el input cuando tiene un error */
    .input-con-error {
        border-color: #ef4444; /* Un tono de rojo */
        border-width: 2px;
    }

    .error{
        color: #dc2626; /* Un rojo más oscuro para el texto */
        font-size: 0.875rem; /* Un poco más pequeño que el texto normal */
    }
    /* Estilo para el texto del mensaje de error */
    .mensaje-error {
        color: #dc2626; /* Un rojo más oscuro para el texto */
        font-size: 0.875rem; /* Un poco más pequeño que el texto normal */
        margin-top: 0.5rem; /* Espacio por encima del mensaje */
        display: block; /* Asegura que ocupe su propia línea */
    }
</style>

</head>
<body>

    <h2>Inicio de Sesión</h2>

    <!-- 6. MOSTRAR MENSAJE DE ESTADO -->
    <?php if (!empty($mensaje)) echo $mensaje; ?>

    <!-- 7. EL FORMULARIO AUTOPROCESADO -->
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div>
            <label for="usuario">Usuario:</label>
            <!--
                - name="usuario": Esencial para que PHP recoja el dato en $_POST['usuario'].
                - value="...": Rellenamos el campo con el valor que el usuario ya introdujo.
                  Lo pasamos por htmlspecialchars() para evitar inyección de código HTML/JS (XSS).
            -->
            <input type="text" id="usuario" name="usuario" value="<?= htmlspecialchars($usuario) ?>">
            
            <!-- Mostramos el error de validación si existe para este campo -->
            <?php if (isset($errores['usuario'])): ?>
                <span class="error"><?= $errores['usuario'] ?></span>
            <?php endif; ?>
        </div>
        <br>
        <div>
            <label for="password">Contraseña:</label>
            <!--
                - name="password": Para recogerlo en $_POST['password'].
                - Por seguridad, el campo de contraseña NUNCA debe ser repoblado.
            -->
            <input type="password" id="password" name="password">

            <!-- Mostramos el error de validación si existe para este campo -->
            <?php if (isset($errores['password'])): ?>
                <span class="error"><?= $errores['password'] ?></span>
            <?php endif; ?>

<input 
        type="password" 
        id="password" 
        name="password"
        placeholder="Introduce tú contraseña"
        class="w-full px-3 py-2 border rounded-md <?php echo isset($errores['password']) ? 'input-con-error' : 'border-gray-300'; ?>"
>


        </div>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>
