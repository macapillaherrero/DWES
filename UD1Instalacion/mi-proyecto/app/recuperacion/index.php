<?php 
    include_once 'login/comprueba_login.php';  
    checkLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <?php 
        echo "<h1>Bienvenido a la página 1</h1>";
        echo "<p>Usuario: " . htmlspecialchars($_SESSION['nombre']) . "</p>";
        echo "<p>Fecha de registro: " . htmlspecialchars($_SESSION['fecha']) . "</p>";
        //Enlace para cerrar sesión
        echo '<a href="login/logout.php">Cerrar sesión</a>';
        echo '<br><a href="usuarios/listar_usuarios.php">Mostrar usuarios</a>';
    ?>
</body>
</html>

