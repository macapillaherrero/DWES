<?php 
session_start();

require_once '../db/conecta.php';
require_once '../db/Usuario.php';
require_once '../db/UsuarioDAO.php';


$conexion = ConexionPDO::getInstance();
$pdo = $conexion->getPdo();

$usuarioDao = new UsuarioDAO($pdo);


$nombre = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre'] ?? '');
    $password = trim($_POST['password'] ?? '');


    $usuario = $usuarioDao->buscarPorNombre($nombre);

    if($usuario) {
        if (password_verify($password, $usuario->password)) {
            $_SESSION['id'] = $usuario->id;
            $_SESSION['nombre'] = $usuario->nombre;
            $_SESSION['fecha'] = $usuario->fecha;
            header('Location: ../index.php');
            exit();
        } else {
            header('Location: form_login.php?error=incorrecta');
        }
    }else {
            header('Location: form_login.php?error=noencotrado');
    }
}
?>