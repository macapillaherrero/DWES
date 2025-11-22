<h2>Formulario de Registro</h2>
<form action="procesar_usuario.php" method="POST">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>
    
    <label for="apellidos">Apellidos:</label><br>
    <input type="text" id="apellidos" name="apellidos" required><br><br>
    
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Registrar">
</form>