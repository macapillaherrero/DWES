 <?php
 
 echo "<h1>Ejercicio 2</h1>";

        $producto = array(
            "Electronica" => array(
                array("Nombre" => "Lenovo Legion go", "Precio" => 500, "Stock" => 15),
                array("Nombre" => "iPhone 14", "Precio" => 1000, "Stock" => 8)
            ),
            "Libros" => array(
                array("Nombre" => "Al Senor de los Anillos", "Precio" => 30, "Stock" => 5),
                array("Nombre" => "Aien Años de Soledad", "Precio" => 25, "Stock" => 3)
            ),
            "Bebidas" => array(
                array("Nombre" => "Coca Cola", "Precio" => 2, "Stock" => 20),
                array("Nombre" => "Agua Mineral", "Precio" => 1, "Stock" => 25)
            )
        );

        $categoria = "Libros";

        usort($producto[$categoria], function($a, $b) {
            return ($a["Precio"] < $b["Precio"]) ? -1 : 1;
        });

        foreach ($producto[$categoria] as $prod) {
            echo "Nombre: " . $prod["Nombre"] . "<br>";
            echo "Precio: " . $prod["Precio"] . "<br>";
            echo "Stock: " . $prod["Stock"] . "<br><br>";
        }

 ?>