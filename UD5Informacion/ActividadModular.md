<img src="https://r2cdn.perplexity.ai/pplx-full-logo-primary-dark%402x.png" style="height:64px;margin-right:32px"/>

# Basándote en este ejercicio de mi compañera Alicia, ayúdame a redactar un enunciado para DWES, pero solo con php, no laravel y siguiendo más o menos las pautas que hemos seguido en otras ocasiones, también quiero que me des los RA y criterios de mi módulo para que los marque en la tarea.

¡Hola! Claro que sí, con mucho gusto te ayudo. He revisado el ejercicio de tu compañera Alicia y lo he adaptado para nuestro módulo de Desarrollo Web en Entorno Servidor (DWES), centrándonos exclusivamente en PHP, como me has pedido.

Aquí tienes una propuesta para el enunciado de la tarea, siguiendo el estilo que hemos usado en clase.

***

### **UD4 - Tarea 4: Procesamiento de un Formulario de Registro con PHP**

**Contexto de la actividad**

Partiendo de la base de un formulario de registro de usuario ya maquetado en HTML y CSS (como el que se trabajó en la tarea de DIW), en esta actividad nos centraremos en el **procesamiento de los datos en el lado del servidor**. Utilizaremos PHP para recibir, validar y dar una respuesta al usuario, aplicando las buenas prácticas de la programación en entorno servidor.

**Objetivos de aprendizaje**

* Comprender el flujo de datos entre un cliente (navegador) y un servidor mediante formularios HTML.
* Recibir y procesar datos enviados a través de los métodos `POST` y `GET`.
* Implementar una lógica de validación robusta en el servidor para garantizar la integridad de los datos.
* Gestionar y mostrar mensajes de error al usuario de forma clara y útil.
* Mantener el estado del formulario ("sticky form") para mejorar la experiencia de usuario en caso de errores de validación.
* Separar correctamente la lógica de procesamiento (PHP) de la capa de presentación (HTML).

**Requisitos funcionales**

1. **Recepción de datos:** Debes crear un script en PHP que sea capaz de recibir la información de un formulario de registro con los siguientes campos (puedes reutilizar el HTML de la tarea anterior):
    * Nombre y apellidos (`text`)
    * Correo electrónico (`email`)
    * Contraseña (`password`)
    * Confirmación de contraseña (`password`)
    * Fecha de nacimiento (`date`)
    * Selección de país (`select`)
    * Aceptación de términos y condiciones (`checkbox`)
2. **Validación en el servidor (La parte clave del ejercicio):**
    * **Todos los campos son obligatorios**, excepto aquellos donde no tenga sentido (la lógica la defines tú).
    * **Nombre y apellidos:** No puede estar vacío.
    * **Correo electrónico:** Debe tener un formato de email válido.
    * **Contraseña:** Debe tener una longitud mínima de 8 caracteres.
    * **Confirmación de contraseña:** Debe coincidir exactamente con el campo de contraseña.
    * **Aceptación de términos:** El *checkbox* debe haber sido marcado.
3. **Gestión de errores:**
    * Si uno o más campos no superan la validación, se debe **volver a mostrar el formulario** al usuario.
    * Junto a cada campo que contenga un error, se debe mostrar un **mensaje descriptivo** (ej: "La contraseña debe tener al menos 8 caracteres").
    * Los campos que el usuario rellenó correctamente **deben conservar su valor**, para que no tenga que volver a escribirlos todos desde cero.
4. **Flujo de éxito:**
    * Si todos los datos son correctos, no se mostrará el formulario. En su lugar, se presentará una página de éxito con un mensaje de bienvenida personalizado, por ejemplo: `"¡Registro completado con éxito! Bienvenido/a, [Nombre del usuario]."`.

**Requisitos técnicos y de entrega**

* El desarrollo se realizará íntegramente en **PHP 8.3**.
* El formulario debe enviar los datos utilizando el método **`POST`**.
* **No se debe utilizar JavaScript** para las validaciones. Todo el control de los datos se hará en el servidor.
* Se valorará la organización del código, la claridad y el uso de comentarios cuando sea necesario.
* **Entrega:** Comprime tu proyecto en un archivo `.zip` con el nombre `UD4_A4_TuNombreApellido.zip` y súbelo a la plataforma.

***

### **Resultados de Aprendizaje y Criterios de Evaluación**

Aquí te dejo los RAs y criterios asociados a esta tarea para nuestro módulo de DWES. Puedes copiarlos directamente en tu documento.

**RA2: Desarrolla aplicaciones web utilizando lenguajes de guion del lado del servidor, analizando y utilizando sus estructuras, funciones y librerías.**

* **b)** Se han utilizado variables y tipos de datos en la elaboración de los guiones para almacenar la información del formulario.
* **c)** Se han utilizado estructuras de control del flujo de la información para implementar la lógica de validación (condicionales, bucles, etc.).
* **f)** Se han creado y procesado formularios, validando los datos en el servidor para asegurar su correctitud antes de procesarlos.
* **g)** Se han utilizado arrays para el tratamiento de conjuntos de datos, como la gestión de la lista de errores de validación.
* **i)** Se ha gestionado el estado de la aplicación entre peticiones, manteniendo los datos del usuario en el formulario tras un envío fallido.

¡Espero que te sirva! Si necesitas algún ajuste o tienes otra duda, no dudes en consultarme. ¡Buen trabajo
<span style="display:none">[^1]</span>

<div align="center">⁂</div>

[^1]: UD4-A3.-Diseno-y-maquetacion-de-un-formulario-de-recogida-de-datos-de-usuario.docx

