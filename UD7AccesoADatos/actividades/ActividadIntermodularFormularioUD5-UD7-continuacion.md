IES CAMP DE MORVEDRE
Prof: <a href="mailto:ma.capillaherrero@edu.gva.es">ma.capillaherrero@edu.gva.es</a>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>

---

### Enunciado de la actividad: Gestión de Usuarios con Registro y Login en PHP

**Contexto de la actividad**

Se pretende crear un sistema básico de gestión de usuarios donde se pueda registrar un nuevo usuario y posteriormente iniciar sesión. Para ello, se desarrollarán las tablas necesarias en MySQL, las clases y objetos en PHP para manejar la inserción y autenticación de usuarios, y formularios que permitan el registro y el login, con la validación completa en el servidor.

**Objetivos de la actividad**

- Adaptar la actividad Formulario Intermodular de la ud5 para insertar y leer de la base de datos.
- Diseñar la estructura de la base de datos para almacenar usuarios de forma segura.
- Crear clases PHP que representen y gestionen usuarios, incluyendo métodos para insertar un nuevo usuario y validar el login.
- Implementar formulario para el login, y procesarlos con PHP.
- Proporcionar mensajes claros de éxito o error y manejar sesiones para mantener el estado del usuario tras login exitoso.

**Requisitos funcionales**

1. **Base de datos MySQL**
    - Crear la tabla `usuarios` con al menos los siguientes campos:
        - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
        - `nombre` (VARCHAR)
        - `apellidos` (VARCHAR)
        - `email` (VARCHAR, único)
        - `password` (VARCHAR, con contraseña hasheada)
        - `fecha_nacimiento` (DATE)
        - `pais` (VARCHAR)
        - `fecha_registro` (TIMESTAMP, valor por defecto con la fecha/hora de creación)
2. **Clases y Objetos en PHP**
    - Crear una clase `Usuario` que tenga propiedades correspondientes a los campos de la tabla.
    - Crear una clase `UsuarioDB` o similar que gestione la conexión a la base de datos y tenga métodos:
        - `insertarUsuario(Usuario $usuario)`: para insertar un nuevo usuario, aplicando el hash seguro a la contraseña.
        - `validarLogin(string $email, string $password)`: para validar credenciales de login comparando la contraseña ingresada (tras hash) con la almacenada.
    - Manejar posibles errores, como email duplicado o usuario no encontrado.

3. **Formulario y procesamiento de Login**
    - Formulario HTML con email y contraseña.
    - Validar que el usuario exista y que la contraseña sea correcta.
    - Si login es exitoso, iniciar sesión PHP y mostrar mensaje o redirigir a zona privada.
    - Si error, mostrar mensaje y permitir reintentar.

***

**Requisitos técnicos y de entrega**

* El desarrollo se realizará íntegramente en **PHP 8.3**.
* El formulario debe enviar los datos utilizando el método **`POST`**.
* Aplicar buenas prácticas en seguridad (hash de contraseñas, sanitización de datos).
* Se valorará la organización del código, la claridad y el uso de comentarios cuando sea necesario.
* **Entrega:** Comprime tu proyecto en un archivo `.zip` con el nombre `UD7_A2_TuNombreApellido.zip` y súbelo a la plataforma.

<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>




