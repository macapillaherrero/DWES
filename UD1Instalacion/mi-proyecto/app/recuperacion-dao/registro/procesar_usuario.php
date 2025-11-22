<?php
session_start();

// Incluye la clase Usuario
require_once 'Usuario.php';

$errores = 0;  
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['nombre'])) {
        $nombre = htmlspecialchars($_POST["nombre"]??'');
        if(empty($nombre)){
            $errores++;
            error_log("El nombre está vacío");
        }        
    }
    if (isset($_POST['apellidos'])) {
        $apellidos = htmlspecialchars($_POST["apellidos"]??'');
        if(empty($apellidos)){
            $errores++;
            error_log("Los apellidos están vacíos");
        }        
    }
    if (isset($_POST['password'])) {
        $password = htmlspecialchars($_POST["password"]??'');
        if(empty($password)){
            $errores++;
            error_log("El password está vacío");
        }      
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    // Crear objeto usuario
    $usuario = new Usuario($nombre, $apellidos, $password, date('Y-m-d H:i:s'));

    if($errores === 0){
        // Insertar en base de datos usando PDO
        try{
           require_once '../db/conecta.php'; 
           $sql = "INSERT INTO usuarios (nombre, apellidos, pass, fecha) VALUES (?, ?, ?, ?)";
           $stmt = $pdo->prepare($sql);
           
           $stmt->execute([$usuario->nombre, $usuario->apellidos, $usuario->password, $usuario->fecha]);
           error_log("Todo ok");

           // Guardar información en sesión
           //obtenemos el id del usuario insertado
           $user_id = $pdo->lastInsertId();
          //Compruebo si el usuario ya estaba logueado y solo está creando nuevos usuarios
          //Hago esto porque si el usuario ya está logueado no quiero sobreescribir su id en la sesión lo que quiero es que puedar crear y listar nuevos usuarios.
           if(!(isset($_SESSION['id']))){
                $_SESSION['id'] =  $user_id;
                $_SESSION['nombre'] = $usuario->nombre;
                $_SESSION['fecha'] = $usuario->fecha;
                header('Location: ../index.php');
           }else{
                header('Location: ../usuarios/listar_usuarios.php');
           }
         
        }catch(PDOException $e){
            error_log($e->getMessage());
        }
    }

}

?>