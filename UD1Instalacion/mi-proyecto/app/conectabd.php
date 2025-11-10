<?php
$host = 'mysql-db';       // Nombre del servicio definido en docker-compose
$db   = 'midb';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    echo "¡Conexión exitosa a MySQL desde Docker!<br>";

    // Ejemplo simple: crea tabla y muestra datos
    $pdo->exec("CREATE TABLE IF NOT EXISTS test (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(255))");
    $pdo->exec("INSERT INTO test (nombre) VALUES ('Alumno')");
    foreach($pdo->query('SELECT * FROM test') as $fila) {
        echo "{$fila['id']} - {$fila['nombre']}<br>";
    }
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>