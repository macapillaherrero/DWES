<p>IES CAMP DE MORVEDRE</p>
<p>Prof:<a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>
---

# Gestionando un Inventario de Tienda

---
**Objetivo:** Poner en práctica los conceptos fundamentales de la Programación Orientada a Objetos (POO) en PHP, como clases, objetos, propiedades, constructores y métodos, a través de un ejercicio colaborativo.

**Modalidad:** Trabajo por parejas. Se recomienda aplicar la técnica de *pair programming*: una persona (el "conductor") escribe el código mientras la otra (el "navegador") revisa, sugiere ideas y detecta errores. Deberíais intercambiar roles a lo largo del desarrollo.

### Descripción del Reto

Vais a crear un sistema para gestionar el inventario de productos de una pequeña tienda. Para ello, desarrollaréis dos clases principales: `Producto` y `Inventario`.

---

### Parte 1: La Clase `Producto`

El primer paso es modelar qué es un producto en nuestro sistema.

1. **Crear la clase `Producto`**:
   * Debe tener las siguientes **propiedades privados**:
     * `$nombre` (string)
     * `$precio` (float)
     * `$stock` (integer)
     * `$id` (integer, un identificador único)
2. **Añadir un constructor `__construct`**:
   * El constructor debe recibir el nombre, precio y stock para inicializar las propiedades del objeto.
   * El `$id` debe generarse automáticamente cada vez que se crea un producto. Podéis usar un contador estático dentro de la clase para asegurar que cada ID sea único.
3. **Definir los siguientes métodos públicos**:
   * `mostrarInformacion()`: Debe imprimir en pantalla una cadena formateada con todos los detalles del producto (ID, nombre, precio y stock).
   * `vender(int $cantidad)`: Resta la cantidad indicada del stock del producto. Debe validar que hay suficiente stock antes de realizar la operación. Si no hay suficiente, mostrará un mensaje de error.
   * `reponer(int $cantidad)`: Suma la cantidad indicada al stock del producto.

---

### Parte 2: La Clase `Inventario`

Esta clase se encargará de gestionar toda la colección de productos.

1. **Crear la clase `Inventario`**:
   * Tendrá una única **propiedad privada**:
     * `$productos` (un array que almacenará objetos de la clase `Producto`).
2. **Definir los siguientes métodos públicos**:
   * `agregarProducto(Producto $producto)`: Añade un objeto `Producto` al array `$productos`.
   * `buscarProductoPorId(int $id)`: Busca un producto en el inventario por su ID y devuelve el objeto `Producto` si lo encuentra. Si no, devuelve `null`.
   * `listarProductos()`: Recorre el array de productos y llama al método `mostrarInformacion()` de cada uno para mostrar el catálogo completo.
   * `valorTotalInventario()`: Calcula y devuelve el valor total del inventario (sumando el resultado de `precio * stock` de cada producto).

---

### Parte 3: Puesta en Práctica

Ahora, crearéis un script PHP (`tienda.php`) para probar vuestras clases. En este script debéis:

1. **Crear al menos 3 objetos `Producto`** diferentes.
2. **Crear un objeto `Inventario`**.
3. **Añadir los productos creados** al inventario.
4. **Listar todos los productos** del inventario para ver el estado inicial.
5. **Vender algunas unidades** de uno de los productos y volver a listar los productos para comprobar que el stock ha disminuido.
6. **Intentar vender más unidades de las que hay en stock** de otro producto para verificar que el control de errores funciona.
7. **Reponer stock** de un tercer producto y listar de nuevo para ver el cambio.
8. **Mostrar el valor total** del inventario.

### Entregable

Debéis entregar tres ficheros PHP que contenga:

* La definición de la clase `Producto`. producto.php
* La definición de la clase `Inventario`. inventario.php 
* El código de prueba que demuestra el funcionamiento de todo el sistema.  (`tienda.php`)

<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>
