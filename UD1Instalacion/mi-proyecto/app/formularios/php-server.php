<?php
echo "Método de solicitud: " . $_SERVER['REQUEST_METHOD']."<br>";
echo "URL actual: " . $_SERVER['REQUEST_URI']."<br>";
echo "Host: " . $_SERVER['HTTP_HOST']."<br>";
echo "Protocolo: " . $_SERVER['SERVER_PROTOCOL']."<br>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME']."<br>";
echo "Puerto del servidor: " . $_SERVER['SERVER_PORT']."<br>";
echo "Agente de usuario: " . $_SERVER['HTTP_USER_AGENT']."<br>";
echo "Dirección IP del cliente: " . $_SERVER['REMOTE_ADDR']."<br>";
echo "Dirección url de la página que nos enlazó: " . $_SERVER['HTTP_REFERER']."<br>";
echo "Dirección de esta página: " . $_SERVER['PHP_SELF']."<br>";
?>