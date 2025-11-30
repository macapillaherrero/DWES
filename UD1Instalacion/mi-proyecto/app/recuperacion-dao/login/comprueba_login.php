<?php
session_start();

// Función para verificar si usuario está autenticado
function checkLogin() {
    if (!isset($_SESSION['id'])) {
        header('Location: form_login.php');
        exit();
    }
}
?>