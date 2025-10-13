<p>IES CAMP DE MORVEDRE</p>
<p>Prof:<a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>

---

# Ejercicios de ampliación

---
### 🧩 Ejercicio 1: Ordenar nombres por longitud

Crea un script que ordene un array de nombres de menor a mayor longitud usando una **función anónima** con `usort()`.

```php
<?php
$nombres = ["Carlos", "Ana", "Beatriz", "Miguel", "Luis"];

// TODO: ordenar el array usando usort y una función anónima
// Pista: usa strlen() dentro de la comparación

print_r($nombres);
```

**Objetivo:** practicas la sintaxis de **funciones anónimas clásicas** y el manejo de **usort()**.

---

### 🧩 Ejercicio 2: Convertir todos los elementos a mayúsculas

Convierte todos los elementos de un array de palabras a mayúsculas usando una **arrow function** con `array_map()`.

```php
<?php
$palabras = ["laravel", "php", "servidor", "backend"];

// TODO: usa array_map y una arrow function para devolver todas en mayúsculas.

print_r($mayusculas);
```

**Objetivo:** aprender la sintaxis de **arrow functions** con funciones de arreglo.

---

### 🧩 Ejercicio 3: Ordenar objetos por propiedad numérica

Tienes un array de objetos (o arrays asociativos) con un campo `puntuacion`. Usa una **arrow function** para ordenarlos de mayor a menor con `usort()`.

```php
<?php
$jugadores = [
    ["nombre" => "Ana", "puntuacion" => 85],
    ["nombre" => "Luis", "puntuacion" => 120],
    ["nombre" => "Bea", "puntuacion" => 95],
];

// TODO: usa usort() con una arrow function para ordenar por 'puntuacion' descendente.

print_r($jugadores);
```

### 🧩 Ejercicio 4: Ordenar alfabéticamente ignorando mayúsculas/minúsculas

Utiliza la función `sort()` y una **función anónima** junto con `usort()` para ordenar un array de palabras **ignorando mayúsculas/minúsculas**.

```php
<?php
$palabras = ["PHP", "laravel", "Servidor", "backend", "Api"];

// TODO: usa usort y una función anónima que compare strtolower($a) y strtolower($b)

print_r($palabras);
```


***

### 🧩 Ejercicio 5: Filtrar elementos que contienen una letra

Con `array_filter()` y una **arrow function**, filtra las palabras que **incluyen la letra 'a'**.

```php
<?php
$palabras = ["php", "laravel", "desarrollo", "web", "usuario"];

// TODO: usa array_filter y una arrow function para obtener solo las palabras con 'a'

print_r($resultado);
```


***

### 🧩 Ejercicio 6: Transformar a arrays de longitud

Utiliza `array_map()` y una **arrow function** para transformar un array de palabras en sus **longitudes**.

```php
<?php
$palabras = ["laravel", "php", "servidor", "backend"];

// TODO: usa array_map y una arrow function que devuelva strlen($item)

print_r($longitudes);
```
<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>
