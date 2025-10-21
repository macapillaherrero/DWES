

<p>IES CAMP DE MORVEDRE</p>
<p>Prof:<a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>
---

Esta actividad es un ejercicio fundamental que os encontraréis a menudo: la creación de un formulario de autenticación.

---

### **Actividad: Formulario de Autenticación con PHP**

#### **Enunciado del Ejercicio**

Debes crear un script PHP que implemente un sistema de inicio de sesión completo. El script validará un nombre de usuario y una contraseña que estarán predefinidos en el propio código.

**Credenciales correctas** (debes definirlas en tu script):

* **Usuario**: `admin`
* **Contraseña**: `1234`

#### **Requisitos a Cumplir**

1. **Script Autoprocesado**: Todo el código (HTML y PHP) debe estar en un único fichero. El propio script mostrará el formulario y procesará los datos enviados.
2. **Método POST**: El envío de los datos del formulario debe realizarse obligatoriamente a través del método `POST`.
3. **Validación de Campos**:
   * Se debe comprobar que tanto el campo de usuario como el de contraseña no se han enviado vacíos.
   * Si algún campo está vacío, se debe mostrar un mensaje de error justo debajo del campo correspondiente.
4. **Lógica de Autenticación**:
   * Si ambos campos contienen datos, el script comprobará si coinciden con las credenciales correctas.
   * Si las credenciales son correctas, se mostrará un mensaje de bienvenida (ej: "¡Bienvenido, admin!").
   * Si son incorrectas, se mostrará un mensaje de error global (ej: "Usuario o contraseña incorrectos.").
5. **Experiencia de Usuario**: Si la autenticación falla, el campo del nombre de usuario debe conservar el valor que el usuario introdujo. Por seguridad, el campo de la contraseña **nunca** debe volver a rellenarse.
6. **Seguridad**: Es imprescindible que utilices la función `htmlspecialchars()` para tratar todos los datos que provienen del usuario antes de mostrarlos en la página, para prevenir ataques XSS.

#### **Código HTML del Formulario (Base para empezar)**

Aquí tenéis la estructura HTML básica del formulario. Vuestra tarea es añadir los atributos `name` a los `input` para que PHP pueda recoger sus valores, y el atributo `value` en el campo del usuario para que sea persistente.

```html
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario">
        <!-- Aquí deberás mostrar el error si el usuario está vacío -->
    </div>
    <br>
    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password">
        <!-- Aquí deberás mostrar el error si la contraseña está vacía -->
    </div>
    <br>
    <button type="submit">Entrar</button>
</form>
```

<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>

[^1]: https://macapillaherrero.github.io/DWES/UD5Informacion/php-formularios.html
