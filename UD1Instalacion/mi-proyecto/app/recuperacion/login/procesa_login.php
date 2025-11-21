<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    try {
      
        // Conexión PDO
        require_once '../db/conecta.php';
        // Consulta para buscar usuario
        $stmt = $pdo->prepare("SELECT id, pass FROM usuarios WHERE nombre = ?");
        $stmt->execute([$nombre]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verificar password con password_verify
            if (password_verify($password, $user['pass'])) { // password_verify(passworddelformulario, passwordalmacenada);
                session_start();

                $_SESSION['id'] = $user['id'];
                $_SESSION['nombre'] = $nombre;
                $_SESSION['fecha'] = date('Y-m-d H:i:s');
                
                header('Location: ../index.php');
                // Redirigir o continuar proceso
            } else {
                header('Location: form_login.php?error=incorrecta');
            }
        } else {
            header('Location: form_login.php?error=noencotrado');
        }

    } catch (PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
    }
}
?>