<p>IES CAMP DE MORVEDRE</p>
<p>Prof:<a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>

## 📝 Práctica de Formulario avanzado con procesamiento en PHP

### Enunciado

Realiza una pequeña aplicación web que **registre datos de usuario** mediante un formulario y procese los datos exclusivamente en el servidor, **sin usar JavaScript**, y sin realizar validaciones del lado del cliente.

---

#### 1. Requisitos del formulario

- El formulario debe presentarse en la página `formulario.php`.
- Debe tener únicamente los siguientes **tres campos**:
    - Nombre completo (input de tipo texto)
    - Correo electrónico (input de tipo email)
    - Código de invitación (input de tipo texto, opcional)
- El formulario deberá enviar los datos, mediante POST, a una página llamada **`procesa.php`**.

---

#### 2. Características particulares

- En el **procesamiento** (en `procesa.php`), se realizará toda la validación de datos:
    - Nombre completo: obligatorio.
    - Correo electrónico: obligatorio y debe ser válido (`FILTER_VALIDATE_EMAIL`).
    - Código de invitación: opcional.
    - **Dominio prohibido:** Se rechazarán registros con emails de dominio `hotmail.com` y `yopmail.com`. El dominio debe extraerse en PHP.
- Si existen errores de validación, el usuario será **redirigido de nuevo** a `formulario.php`, mostrando los mensajes de error correspondientes mediante una variable (por ejemplo, usando `$_GET` o `$_POST` temporalmente).  
- Si los datos son válidos, mostrar en `procesa.php` un mensaje de éxito y un resumen de los datos recibidos.

---

#### 3. Estructura y modularidad

- Utiliza **includes** para el encabezado y pie de página en ambos ficheros.
    - Por ejemplo: `include 'header.php';` y `include 'footer.php';`
- Las redirecciones deben realizarse **con header** en PHP.
    - Por ejemplo: `header('Location: formulario.php?error=El nombre es obligatorio.'); exit;`

---

#### 4. Entrega

Presenta los siguientes ficheros:

- `formulario.php` (el formulario)
- `procesa.php` (la lógica de validación y presentación de datos)
- `header.php` y `footer.php` (estructura común reutilizable)

---

#### 5. Extra (opcional)

Permite que el campo de código de invitación **se autocomplemente** si llega en la URL como parámetro `?invite=XYZ`, pero solo **desde PHP**, nunca desde JavaScript.

---

**Recuerda:**  
No debe haber nada de JavaScript, ni name ni value en los inputs, y todas las validaciones deben realizarse en el servidor.

---

<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>