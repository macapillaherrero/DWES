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
    $usuarios = $usuarioDao->listarTodos(); 
    //Muestro la lista de usuarios
  
  
    
    //Lo guay sería mostrarlo en una tabla HTML, pero por simplicidad lo haré en texto plano
    echo '<h1>Lista de usuarios registrados</h1><br>';
    echo '<a href="../registro/registro.php">Registrar otro usuario</a>&nbsp;&nbsp;&nbsp;<a href="../index.php">Volver a la página principal</a><br><hr>';
    //Muestro los usuarios que he obtenido
     foreach ($usuarios as $usuario) {      
       echo 'ID: ' . htmlspecialchars($usuario->id) . '&nbsp;&nbsp;&nbsp;';
       echo 'Nombre: ' . htmlspecialchars($usuario->nombre) . '&nbsp;&nbsp;&nbsp;';
       echo 'Fecha de registro: ' . htmlspecialchars($usuario->fecha);  
       echo '<a href="eliminiar_usuario.php?id='.$usuario->id.'"> Eliminar usuario </a> <br><hr>';
     }
    

?>