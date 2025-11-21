<?php 
/*Esta zona de la aplicación es privada y solo podemos entrar si se
ha hecho login previamente*/
//No hago session_start() aquí porque ya se hace en comprueba_login.php
    include_once '../login/comprueba_login.php';  
    checkLogin();

    // Conexión a la base de datos
    include_once '../db/conecta.php';

    //Consulta para obtener todos los usuarios
    $stmt = $pdo->prepare('SELECT id, nombre, fecha FROM usuarios');
    $stmt->execute(); //No hace falta pasarle nada porque no hay parámetros quiero todos los usuarios registrados en la base de datos
   
    
    //Lo guay sería mostrarlo en una tabla HTML, pero por simplicidad lo haré en texto plano
    echo '<h1>Lista de usuarios registrados</h1><br>';
    echo '<a href="../registro/registro.php">Registrar otro usuario</a>&nbsp;&nbsp;&nbsp;<a href="../index.php">Volver a la página principal</a><br><hr>';
    //Muestro los usuarios que he obtenido
    while($fila = $stmt->fetch()) {
        echo 'ID: ' . htmlspecialchars($fila['id']) . '&nbsp;&nbsp;&nbsp;';
        echo 'Nombre: ' . htmlspecialchars($fila['nombre']) . '&nbsp;&nbsp;&nbsp;';
        echo 'Fecha de registro: ' . htmlspecialchars($fila['fecha']);  
        echo '<a href="eliminiar_usuario.php?id='.$fila['id'].'"> Eliminar usuario </a> <br><hr>';
    }
   // var_dump($usuarios); //Para depurar, luego lo quito


?>