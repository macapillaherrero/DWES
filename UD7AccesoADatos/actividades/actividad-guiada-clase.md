
## Ejercicio de recuperación: Sesiones, Cookies y Base de datos

### Objetivo

Desarrollar una pequeña aplicación en PHP que permita gestionar usuarios utilizando sesiones, cookies y almacenamiento de datos en MySQL.

---

### 1. Crear la base de datos en MySQL

- Nombre de la base de datos: **recuperacion**
  Ejemplo de comando SQL:

```sql
CREATE DATABASE recuperacion;
```

---

### 2. Crear la tabla de usuarios

- La tabla se llamará `usuarios`
- Campos:
  - nombre (VARCHAR)
  - apellidos (VARCHAR)
  - password (VARCHAR), la contraseña debe almacenarse cifrada
  - fecha (DATE/DATETIME)

Ejemplo de comando SQL:

```sql
USE recuperacion;
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  apellidos VARCHAR(100),
  password VARCHAR(255),
  fecha DATETIME
);
```

---

### 3. Clase Usuario en PHP

Debes crear una clase llamada **Usuario** con las propiedades:

- nombre
- apellidos
- password
- fecha

La propiedad fecha tendrá el siguiente comportamiento:

- Si existe una cookie llamada `fecha`, se usará el valor de la cookie.
- Si existe una variable de sesión llamada `fecha`, se usará el valor de la sesión.
- Si existen ambas (cookie y sesión), se puede usar cualquiera de ellas.
- Si no existe ninguna, se asignará el valor actual (fecha y hora del momento).

```php
class Usuario {
    public $nombre;
    public $apellidos;
    public $password;
    public $fecha;

    public function __construct($nombre, $apellidos, $password) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->password = password_hash($password, PASSWORD_BCRYPT); // cifrado
        // Lógica para fecha
        if (isset($_COOKIE['fecha'])) {
            $this->fecha = $_COOKIE['fecha'];
        } elseif (isset($_SESSION['fecha'])) {
            $this->fecha = $_SESSION['fecha'];
        } else {
            $this->fecha = date('Y-m-d H:i:s');
        }
    }
}
```

---

### 4. Formulario HTML para recogida de datos de usuario

Crear un formulario para la recogida de datos del usuario con tres datos básicos.

![](D:\OneDrive - Conselleria d'Educació\IES CAMP\CURSO25-26\2DAW\DWES\UD1Instalacion\mi-proyecto\app\recuperacion\Captura de pantalla 2025-11-13 130811.png)

### 5. Insertar el Usuario en la base de datos

- Crea un objeto Usuario con los datos recogidos vía formulario
- Inserta el usuario en la base de datos usando PDO.
- Guarda la contraseña cifrada (`password_hash` en PHP)
- Ejemplo PDO:

```php
$usuario = new Usuario($nombre, $apellidos, $password);
$stmt = $pdo->prepare("INSERT INTO usuarios (nombre, apellidos, password, fecha) VALUES (?, ?, ?, ?)");
$stmt->execute([$usuario->nombre, $usuario->apellidos, $usuario->password, $usuario->fecha]);
```

---

### 5. Exportar y entregar

- Exporta la base de datos con **mysqldump**:

```sh
mysqldump -u usuario -p recuperacion > recuperacion.sql
```

- Comprime todos los archivos del proyecto (código fuente y SQL) en un archivo `.zip` y sube a la plataforma indicada por el profesor.

---

### Requisitos y Puntuación

| Tarea                                                            | Puntos |
| :--------------------------------------------------------------- | :----- |
| Creación de base de datos y tabla                               | 1,75   |
| Programación de la clase Usuario con lógica de fecha y cifrado | 2      |
| Crear el formulario y recoger los datos con seguridad            | 2      |
| Inserción segura en base de datos                               | 2,25   |

Total: **8 puntos**

---
