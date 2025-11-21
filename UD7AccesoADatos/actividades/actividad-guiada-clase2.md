IES CAMP DE MORVEDRE
Prof: <a href="mailto:ma.capillaherrero@edu.gva.es">ma.capillaherrero@edu.gva.es</a>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>


---

## 🧑‍💻 Ejercicios propuestos

Crear un formulario HTML para login que permita al usuario introducir su nombre y contraseña. El formulario debe enviarse mediante el método POST a un archivo PHP que procese la autenticación del usuario.

---

### Solución

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login de Usuario</title>
</head>
<body>
    <h2>Formulario de Login</h2>
    <form action="login.php" method="POST">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
      
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
      
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
```

## Ejercicio de Login con PDO y Verificación de Usuario

Realiza una aplicación PHP que permita a un usuario iniciar sesión comprobando sus credenciales en una base de datos MySQL. Para ello, deberás:

- Conectarte a la base de datos usando PDO con excepciones activadas.
- Preparar una consulta segura para buscar un usuario en la tabla `usuarios` por el nombre recibido desde un formulario.
- Ejecutar la consulta y obtener el resultado.
- Comprobar si ese usuario existe en la base de datos.
- Si existe, verificar que la contraseña enviada coincide con la almacenada en la base de datos utilizando la función `password_verify`, ya que la contraseña está cifrada.
- En caso de que las credenciales sean correctas, iniciar sesión y mostrar un mensaje de acceso permitido.
- En caso contrario, mostrar un mensaje explicando que el usuario no existe o que la contraseña es incorrecta.

