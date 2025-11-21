<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login de Usuario</title>
</head>
<body>
    <?php
    if (isset($_GET['error']) && $_GET['error'] === 'incorrecta') {
        echo "<p style='color:red;'>Nombre de usuario o contraseña incorrecta.</p>";
    }else if (isset($_GET['error']) && $_GET['error'] === 'noencotrado') {
        echo "<p style='color:red;'>Usuario no encontrado.</p>";
    }
    ?>
    <h2>Formulario de Login</h2>
    <form action="procesa_login.php" method="POST">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        
        <button type="submit">Entrar</button>
    </form>
    <form action="../registro/registro.php" method="POST">
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
