<p>IES CAMP DE MORVEDRE</p>
<p>Prof:<a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>
### Actividad: Simulador de Máquina de Café

**Objetivo:** Aplicar la programación modular y las estructuras de control `switch` para crear un simulador funcional de una máquina de café.

**Enunciado:**

Desarrolla un script en PHP que simule el funcionamiento de una máquina de café. El programa debe estar organizado en módulos (funciones) para fomentar la reutilización del código y la claridad.

**Requisitos funcionales:**

1. **Función principal `prepararCafe`:**
    * Esta será la función principal que orquestará todo el proceso.
    * Debe aceptar tres parámetros:
        * `$tipoCafe`: Una cadena que indica el tipo de café a preparar (`espresso`, `americano`, `capuchino`).
        * `$azucar`: Un valor numérico que representa la cantidad de cucharadas de azúcar (de 0 a 3).
        * `$lecheExtra`: Un valor booleano (`true` o `false`) que indica si se desea un extra de leche.
2. **Módulo de selección de café (usando `switch`):**
    * Dentro de `prepararCafe`, utiliza una estructura `switch` para gestionar la preparación según el `$tipoCafe` recibido.
    * Cada `case` del `switch` debe invocar a una función específica para ese tipo de café. Por ejemplo:
        * `case 'espresso'`: Llama a `hacerEspresso()`.
        * `case 'americano'`: Llama a `hacerAmericano()`.
        * `case 'capuchino'`: Llama a `hacerCapuchino()`.
    * Si se introduce un tipo de café no válido, el `switch` debe tener una opción `default` que devuelva un mensaje de error como "Tipo de café no disponible".
3. **Módulos de preparación (funciones específicas):**
    * Crea las siguientes funciones, cada una responsable de una tarea concreta:
        * `hacerEspresso()`: Debe devolver el mensaje "Preparando un café espresso.".
        * `hacerAmericano()`: Debe devolver el mensaje "Preparando un café americano (espresso + agua caliente).".
        * `hacerCapuchino()`: Debe devolver el mensaje "Preparando un capuchino (espresso + leche espumada).".
4. **Módulos de adiciones:**
    * Crea dos funciones para gestionar los extras:
        * `anadirAzucar($cantidad)`: Esta función recibirá la cantidad de azúcar. Si la cantidad es mayor que 0, devolverá un mensaje como "Añadiendo X cucharadas de azúcar.". Si es 0, no devolverá nada.
        * `anadirLecheExtra($extra)`: Esta función recibirá el valor booleano. Si es `true`, devolverá el mensaje "Añadiendo un extra de leche.". Si es `false`, no devolverá nada.
5. **Lógica de ensamblaje en `prepararCafe`:**
    * La función `prepararCafe` debe construir el mensaje final concatenando los resultados de las funciones modulares en el siguiente orden:

6. El resultado de la preparación del tipo de café (usando el `switch`).
7. El resultado de la función `anadirAzucar`.
8. El resultado de la función `anadirLecheExtra`.
    * Finalmente, la función `prepararCafe` devolverá la cadena completa con el resumen del pedido.

**Ejemplo de ejecución en el script principal:**

```php
// Llamadas a la función principal para probar diferentes combinaciones
echo prepararCafe('capuchino', 2, true);
// Salida esperada: "Preparando un capuchino (espresso + leche espumada). Añadiendo 2 cucharadas de azúcar. Añadiendo un extra de leche."

echo "\n"; // Separador

echo prepararCafe('espresso', 0, false);
// Salida esperada: "Preparando un café espresso. "

echo "\n";

echo prepararCafe('latte', 1, false);
// Salida esperada: "Tipo de café no disponible."
```


<span style="display:none">[^1][^2][^3][^4][^5][^6][^7][^8][^9]</span>

<div align="center">⁂</div>

[^1]: https://blog.krusher.net/2021/07/como-hacer-cafe-con-distintos-lenguajes-de-programacion/

[^2]: https://aprenderaprogramar.com/foros/index.php?topic=762.0

[^3]: https://centros.edu.xunta.gal/iesfontexeria/aulavirtual/mod/resource/view.php?id=31629

[^4]: https://arangoya.org/programacion-modular-como-mejora-el-desarrollo-de-software/

[^5]: https://codea.app/blog/estructura-web-modular

[^6]: https://www.youtube.com/watch?v=zBIG4D8KhWc

[^7]: https://www.youtube.com/shorts/cQoz0zUxo34

[^8]: https://programacion.asecompu.net

[^9]: https://www.reddit.com/r/embedded/comments/1mejdcy/modular_programming_example/

<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>