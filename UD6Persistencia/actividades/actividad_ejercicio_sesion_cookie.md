IES CAMP DE MORVEDRE
Prof: <a href="mailto:ma.capillaherrero@edu.gva.es">ma.capillaherrero@edu.gva.es</a>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>

---

# Actividad Práctica: "Crea tu Propia Aventura Espacial"

## Enunciado

Vamos a desarrollar una breve aventura interactiva de texto donde el usuario toma decisiones que afectan el resultado de la historia. El estado de la aventura se mantendrá con **sesiones**, y su progreso final se guardará en una **cookie** para que pueda recordarlo en futuras visitas.

La idea es crear una experiencia donde las elecciones importan y persisten, un caso de uso perfecto para estas tecnologías.

## Requisitos y Flujo de la Aplicación

La aplicación constará de varias páginas o estados lógicos:

1.  **Página de Inicio (`index.php`):**
    *   Al entrar, el script debe buscar una cookie llamada `aventura_pasada`.
    *   **Si la cookie existe**, mostrará un mensaje de bienvenida y un resumen de la última aventura completada por el usuario (ej: "¡Bienvenido de nuevo, Comandante! En tu último viaje, decidiste explorar el agujero de gusano y descubriste la civilización Zorg. ¿Te atreves con un nuevo viaje?").
    *   Mostrará dos botones: **"Comenzar Nueva Aventura"** y **"Borrar Historial y Empezar"**.
    *   **Si la cookie no existe**, solo mostrará el botón "Comenzar Nueva Aventura".

2.  **Página de la Aventura (`juego.php`):**
    *   Este script gestionará la lógica del juego. Se basará en una variable de sesión (ej: `$_SESSION['paso']`) para saber en qué punto de la historia se encuentra el usuario.
    *   En cada paso, se presentará una situación y un formulario con 2-3 opciones (radio buttons).
        *   _Ejemplo Paso 1:_ "Tu radar detecta una anomalía. ¿Qué haces?" Opciones: "Investigar la señal", "Ignorarla y seguir la ruta".
    *   Cuando el usuario envía el formulario, la elección se guarda en un array en la sesión (ej: `$_SESSION['decisiones']`), se incrementa el `$_SESSION['paso']` y se muestra el siguiente escenario.
    *   La aventura debe tener al menos 3 pasos con diferentes ramificaciones.

3.  **Página Final (`fin.php`):**
    *   Cuando el usuario completa el último paso, se le redirige aquí.
    *   Esta página muestra un resumen de la aventura basado en las decisiones guardadas en `$_SESSION['decisiones']`.
    *   **Crea o actualiza la cookie `aventura_pasada`**, guardando un resumen del resultado (puedes usar `json_encode` para guardar el array de decisiones). Esta cookie debe tener una validez de 30 días.
    *   Destruye la sesión actual para finalizar el juego.
    *   Ofrece un enlace para volver al inicio (`index.php`).

4.  **Lógica de Reinicio:**
    *   El botón "Borrar Historial y Empezar" en `index.php` debe encargarse de eliminar la cookie `aventura_pasada` antes de iniciar una nueva partida.

## Puntos Clave de Evaluación

* **RA4_b:** Correcta utilización de **sesiones** para gestionar el estado de una aplicación multi-paso.

* **RA4_c:** Uso significativo de **cookies** para ofrecer una experiencia personalizada entre diferentes visitas (persistencia a largo plazo).

* **RA3_e y RA3_f:** Implementación de **formularios** como método principal de interacción y correcta recuperación de los datos enviados.

* **RA3_c (implícito):** Uso de arrays (`$_SESSION['decisiones']`) para almacenar un conjunto de datos.

* Separación de la lógica para hacer el código más legible.


## **Ejemplos de Pasos para la Aventura Espacial**(Por si andáis escasos de ideas)

  **Paso 1: La Señal Misteriosa**

  * **Situación:** Estás al mando de la nave estelar "Odisea". Durante una patrulla de rutina en el Sector Gamma-7, la consola de comunicaciones emite un pitido insistente. Es una señal de socorro... pero el código es antiguo, de una nave que desapareció hace más de 50 años.
  * **Opciones (Formulario):**

  1. **A:** Desviar el curso para investigar la fuente de la señal. Es arriesgado, pero podría haber supervivientes.
  2. **B:** Registrar la anomalía en la bitácora y continuar con la misión. El protocolo es claro.
  3. **C:** Enviar una sonda no tripulada para un reconocimiento preliminar mientras mantienes una distancia segura.

  **Paso 2: El Planeta de Cristal (Si eligió A o C en el Paso 1)**

  * **Situación:** La señal te lleva a un planeta no cartografiado cuya superficie está cubierta de gigantescas formaciones cristalinas que interfieren con los sensores. Al aterrizar, encuentras los restos de la nave perdida, pero no hay cuerpos. En su lugar, ves una cueva cercana de la que emana una extraña luz azul.
  * **Opciones (Formulario):**

  1. **A:** Entrar en la cueva para investigar el origen de la luz.
  2. **B:** Centrarse en los restos de la nave, buscando la bitácora de vuelo para entender qué sucedió.
  3. **C:** Regresar a la "Odisea". El lugar es demasiado extraño y los cristales podrían dañar los sistemas de la nave.

  **Paso 3: El Guardián (Si eligió A en el Paso 2)**

  * **Situación:** Dentro de la cueva, descubres que la luz proviene de una entidad energética flotante. Se comunica contigo telepáticamente: "Soy el Guardián de este planeta. Los tripulantes de la nave intentaron robar los cristales de memoria y los puse en un estado de hibernación. ¿Buscas conocimiento o poder?".
  * **Opciones (Formulario):**

  1. **A:** "Busco conocimiento. ¿Puedes contarme la historia de este lugar?". (Lleva a un final pacífico y de descubrimiento).
  2. **B:** "Exijo que liberes a los tripulantes. Son ciudadanos de la Federación". (Lleva a un final de confrontación).
  3. **C:** Intentar tomar una muestra de un cristal pequeño sin que el Guardián se dé cuenta. (Lleva a un final de sigilo, con consecuencias inciertas).

<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>