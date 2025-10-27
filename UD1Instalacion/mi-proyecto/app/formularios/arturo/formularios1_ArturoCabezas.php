<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario Arturo 1</title>
    </head>
    <body>
        <?php
        $usuarioCorrecto = "admin";
        $contrasenaCorrecta = "1234";

        $errorUsuario = "";
        $errorContrasena = "";
        $errorAutenticacion = "";
        $mensajeBienvenida = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
            $usuarioTrim = trim($_POST['usuario']);
            $contrasenaTrim = trim($_POST['password']);

            if (empty($usuarioTrim)) { $errorUsuario = "El campo del usuario no puede estar vacío."; }
            if (empty($contrasenaTrim)) { $errorContrasena = "El campo contraseña no puede estar vacío."; }


            if ($usuarioTrim === $usuarioCorrecto && $contrasenaTrim === $contrasenaCorrecta) {
                $mensajeBienvenida = "¡Bienvenido, " . htmlspecialchars($usuarioTrim) . "!";
            } else {
                $errorAutenticacion = "Usuario o contraseña incorrectos.";
                $usuarioCorrecto = "";
                $contrasenaCorrecta = "";
            }
        }
        ?>

        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="<?= $errorUsuario ?>">
                <br>
                <span style="color:red;"><?= $errorUsuario ?></span>
            </div>
            <br>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="<?= $errorContrasena ?>">
                <br>
                <span style="color:red;"><?= $errorContrasena ?></span>
            </div>
            <br>

            <button type="submit">Entrar</button>
        </form>

        <div style="color:red;"><?= $errorAutenticacion ?></div>
        <div style="color:green;"><?= $mensajeBienvenida ?></div>
    </body>
</html>
