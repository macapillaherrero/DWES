# UD2.  INTRODUCCIÓN AL LENGUAJE PHP 

###  Convenciones de Formato y Codificación

 El documento distingue cuatro tipos de escritura:

  *  **PascalCase/UpperCamelCase**: `MiElemento` 
  *  **camelCase/lowerCamelCase**: `miElemento`
  *  **snake\_case**: `mi_elemento`
  *  **kebab-case**: `mi-elemento` 

-----

### Convenciones para Nombres en PHP

  *  **Funciones y Variables**: Se recomienda usar `snake_case`.  Por ejemplo, `$variable_int = 3;`  y `mi_funcion($variable_int, $variable_string){}`.
  *  **Métodos**: Se utiliza `camelCase` o `lowerCamelCase`.  Por ejemplo, `public miMetodo ($variable_int, $variable_string){}`.
  *  **Constantes**: Se escriben en mayúsculas.  Un ejemplo es `define("CONSTANTE", "Hola mundo.");`.
  *  **Clases**: Se usa `UpperCamelCase` o `PascalCase`.  Un ejemplo es `class MiClase{}`.

-----

### Las Llaves

 Las llaves que delimitan el código pueden ir en la misma línea que la función o en una línea nueva.

`mi_función{`
`/* código y comentarios. */`
`}`

`mi_función`
`{`
`/* código y comentarios. */`
`}`

-----

###  Comentarios de Cliente y Servidor 

  *  Se utiliza `//` para comentarios de una sola línea en PHP.
  *  Se usa `/* */` para comentarios de varias líneas.
  *  En ficheros de configuración como `.htaccess`, se utiliza `#`.
  *  En ficheros tipo `php.ini`, se utiliza `;`.

-----

###  Tipos de Datos, Conversiones y Variables 

 PHP es un lenguaje no tipado, lo que significa que una variable puede reutilizarse para distintos tipos de datos.  El documento menciona los siguientes tipos de datos:

  *  Booleanos 
  *  Números enteros (`Integers`) 
  *  Números de punto flotante 
  *  Cadenas de caracteres (`Strings`) 
  *  Objetos 
  *  `NULO` 

-----

###  Conversiones entre Tipos de Datos (`Casting`)

 El *casting* es la conversión explícita de un tipo de dato a otro.

Ejemplo 1:

```php
<?php
$foo = 10; [cite_start]// $foo es un integer 
$bar = (boolean) $foo; [cite_start]// $bar es un boolean 
?>
```

Ejemplo 2:

```php
<?php
$foo = 10; [cite_start]// $foo es un integer 
$str = "$foo"; [cite_start]// $str es un string
$fst = (string) $foo; [cite_start]// $fst es también un string 
?>
```

-----

###  Integración con Lenguajes de Marcas 

 Puedes integrar el código PHP dentro de lenguajes de marcas como HTML.

Ejemplo:
`<h1> <?php echo $titulo; [cite_start]?> </h1>`

 El documento aconseja evitar el "código espagueti" que consiste en escribir código HTML dentro de etiquetas PHP.

Ejemplo de lo que se debe evitar:
 `<?php echo "<h1>".$titulo."</h1>";?>` 