<?php
session_start();

require_once 'Usuario.php';
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
        // Hashear la contraseña solo si no hay errores
        $passwordHashed = password_hash($passwordRaw, PASSWORD_DEFAULT);

        $usuario = new Usuario($nombre, $apellidos, $passwordHashed, date('Y-m-d H:i:s'));

        try {
            $sql = "INSERT INTO usuarios (nombre, apellidos, pass, fecha) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$usuario->nombre, $usuario->apellidos, $usuario->password, $usuario->fecha]);

            // Guardar información en sesión
            $_SESSION['user_id'] = $pdo->lastInsertId();
            $_SESSION['username'] = $usuario->nombre;
            $_SESSION['fecha'] = $usuario->fecha;

            error_log("Usuario insertado correctamente.");
        } catch (PDOException $e) {
            error_log("Error al insertar usuario: " . $e->getMessage());
            $errores[] = "Error al guardar el usuario. Intente de nuevo.";
        }
    } else {
        // Registrar errores en log
        foreach ($errores as $error) {
            error_log($error);
        }
    }
}
