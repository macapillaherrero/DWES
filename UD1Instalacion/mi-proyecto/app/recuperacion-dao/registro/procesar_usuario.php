<?php
session_start();

require_once '../db/UsuarioDAO.php';
require_once '../db/Usuario.php';
require_once '../db/conecta.php';

$errores = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitizar y validar datos recibidos
    $nombre = trim($_POST['nombre'] ?? '');
    $apellidos = trim($_POST['apellidos'] ?? '');
    $passwordRaw = $_POST['password'] ?? '';

    if ($nombre === '') {
        $errores[] = "El nombre está vacío";
    }

    if ($apellidos === '') {
        $errores[] = "Los apellidos están vacíos";
    }

    if ($passwordRaw === '') {
        $errores[] = "El password está vacío";
    }

    if (empty($errores)) {

        $conexion = ConexionPDO::getInstance();
        $pdo = $conexion->getPdo();
        $usuarioDao = new UsuarioDAO($pdo);

        // Hashear la contraseña solo si no hay errores
        $passwordHashed = password_hash($passwordRaw, PASSWORD_DEFAULT);

        $usuario = new Usuario($nombre, $apellidos, $passwordHashed, date('Y-m-d H:i:s'));

        // Insertar en base de datos usando UsuarioDAO
        $usuarioDao->guardar($usuario);    

        // Guardar información en sesión
        $_SESSION['id'] = $pdo->lastInsertId();
        $_SESSION['nombre'] = $usuario->nombre;
        $_SESSION['fecha'] = $usuario->fecha;

        // Redirigir a página de éxito o mostrar mensaje
        header('Location: ..\usuarios\listar_usuarios.php');
       
    } else {
        // Registrar errores en log
        foreach ($errores as $error) {
            error_log($error);
        }
    }
}
