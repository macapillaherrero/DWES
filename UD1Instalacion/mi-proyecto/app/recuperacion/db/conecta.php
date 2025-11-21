<?php

$host = 'mysql-db';
$db   = 'recuperacion';
$user = 'root'; //modificar
$pass = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
     error_log("¡Conexión exitosa!"); //Tengo que quitar los mensajes por las redirecciones
} catch (PDOException $e) {
     error_log('Error de conexión: ' . $e->getMessage());
}


?>
