# Actividades de Introducción a PHP (UD2) 



## Actividad 1: Mi Primer Script PHP

El objetivo es crear el clásico "Hola, Mundo" para asegurar que entiendes la sintaxis básica de PHP y la función `echo`.

**Instrucciones:** Crea un archivo PHP que imprima en el navegador la frase: `¡Mi primer script en PHP!`

**Escribe tu código aquí:**

```
<?php
// Escribe aquí tu código para mostrar el mensaje

?>
```

**Resultado esperado:**

```
¡Mi primer script en PHP!
```

## Actividad 2: Jugando con Variables

Esta actividad se centra en la declaración de variables, la asignación de diferentes tipos de datos (texto y número) y la concatenación simple.

**Instrucciones:**

1. Declara una variable `$nombre` y asígnale tu nombre.
2. Declara una variable `$año` y asígnale el año actual.
3. Muestra por pantalla una frase que combine ambas variables, como: `Hola, [tu nombre]. ¡Estamos en el año [año actual]!`

**Escribe tu código aquí:**

```
<?php
// Escribe aquí tu código

?>
```

**Resultado esperado (ejemplo si tu nombre es María y el año 2024):**

```
Hola, María. ¡Estamos en el año 2024!
```

## Actividad 3: Calculadora Sencilla

Con este ejercicio practicarás las operaciones aritméticas básicas.

**Instrucciones:**

1. Define dos variables numéricas, `$num1` con el valor `15` y `$num2` con el valor `5`.
2. Calcula la suma, la resta y la multiplicación de ambas variables.
3. Muestra cada resultado en una línea nueva, precedido de un texto descriptivo. (Pista: puedes usar `<br>` para los saltos de línea en HTML).

**Escribe tu código aquí:**

```
<?php
// Escribe aquí tu código

?>
```

**Resultado esperado:**

```
La suma es: 20
La resta es: 10
La multiplicación es: 75
```

## Actividad 4: Uso de Comentarios

Esta actividad te ayudará a entender cómo documentar tu código.

**Instrucciones:** Copia el código de tu solución de la "Calculadora Sencilla" (Actividad 3) y añade comentarios para explicar qué hace cada parte:

1. Un comentario de bloque (`/* ... */`) al principio que describa el propósito general del script.
2. Un comentario de una línea (`//`) antes de la declaración de las variables para indicar qué son.
3. Un comentario de una línea (`//`) antes de cada operación para explicar qué cálculo se está realizando.

**Escribe tu código aquí:**

```
<?php
// Pega aquí tu código de la Actividad 3 y añade los comentarios

?>
```

**Resultado esperado:** El resultado en el navegador es el mismo que en la Actividad 3, pero tu código ahora estará mucho más claro y documentado.

## Actividad 5: Condicional Básico

Vamos a introducir la lógica con una estructura `if...else` muy simple.

**Instrucciones:**

1. Crea una variable `$temperatura` y asígnale un valor numérico (por ejemplo, `22`).
2. Escribe una estructura `if...else` que muestre:
   - "¡Qué calor!" si la temperatura es mayor de 25.
   - "La temperatura es agradable." en cualquier otro caso.
3. Prueba a cambiar el valor de `$temperatura` a `30` y a `15` para ver cómo cambia el mensaje.

**Escribe tu código aquí:**

```
<?php
// Escribe aquí tu código

?>
```

**Resultado esperado (con temperatura = 22):**

```
La temperatura es agradable.
```