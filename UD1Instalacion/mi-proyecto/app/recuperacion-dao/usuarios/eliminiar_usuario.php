<?php
/*Esta zona de la aplicación es privada y solo podemos entrar si se
ha hecho login previamente*/
//No hago session_start() aquí porque ya se hace en comprueba_login.php
    include_once '../login/comprueba_login.php';  
    checkLogin();

    // Conexión a la base de datos
    include_once '../db/conecta.php';
    include_once '../db/UsuarioDAO.php';
    include_once '../db/Usuario.php';

    $conexion = ConexionPDO::getInstance();
    $pdo = $conexion->getPdo();
    $usuarioDao = new UsuarioDAO($pdo);

    //Recibo el id del usuario a eliminar
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $usuarioDao->eliminar($id, $_SESSION['id']);
       
    } else {
        echo "No se ha proporcionado un ID de usuario válido para eliminar.<br>";
    }

    //Enlace para volver a la lista de usuarios
    echo '<a href="listar_usuarios.php">Volver a la lista de usuarios</a>';
?>