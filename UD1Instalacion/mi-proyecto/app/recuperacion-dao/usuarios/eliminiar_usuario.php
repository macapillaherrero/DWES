<?php
/*Esta zona de la aplicación es privada y solo podemos entrar si se
ha hecho login previamente*/
//No hago session_start() aquí porque ya se hace en comprueba_login.php
    include_once '../login/comprueba_login.php';  
    checkLogin();

    // Conexión a la base de datos
    include_once '../db/conecta.php';

    //Recibo el id del usuario a eliminar
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        //Preparar y ejecutar la consulta de eliminación
        $stmt = $pdo->prepare('DELETE FROM usuarios WHERE id = ?');

        //Comprobar que el usuario que quiero eliminar no es el mismo que está logueado
        if ($id == $_SESSION['id']) {
            echo "No puedes eliminar el usuario que está logueado actualmente.<br>";
        }else {
            $stmt->execute([$id]);
            if ($stmt->rowCount()>0) {
                echo "Usuario con ID " . htmlspecialchars($id) . " eliminado correctamente.<br>";
            } else {
               echo "Error al eliminar el usuario con ID " . htmlspecialchars($id) . ".<br>";
            }
        }
    } else {
        echo "No se ha proporcionado un ID de usuario válido para eliminar.<br>";
    }

    //Enlace para volver a la lista de usuarios
    echo '<a href="listar_usuarios.php">Volver a la lista de usuarios</a>';
?>