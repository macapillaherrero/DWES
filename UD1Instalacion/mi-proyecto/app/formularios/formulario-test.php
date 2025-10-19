<!DOCTYPE html>
<html>
<body>
 
<?php //Envío de un input de texto sencillo ?> 
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
  <p>Nombre: <input type="text" name="nombre"></p>

<?php //Envío de un radiobutton ?>

  <p>Género:</p>
  <p>
    <input type="radio" name="genero" value="masculino"> Masculino<br>
    <input type="radio" name="genero" value="femenino"> Femenino<br>
    <input checked type="radio" name="genero" value="otro"> Otro
  </p>

<?php //Envío de un checkbox ?>
    <p>Intereses:</p>
    <p>
      <input type="checkbox" name="intereses[]" value="deportes"> Deportes<br>
      <input type="checkbox" name="intereses[]" value="musica"> Música<br>
      <input type="checkbox" name="intereses[]" value="tecnologia"> Tecnología
    </p>

<?php //Envío de un option ?>   
    <p>País:</p>
    <p>
      <select name="pais">
        <option value="españa">España</option>
        <option value="francia">Francia</option>
        <option value="alemania">Alemania</option>
      </select>
    </p>

<?php //Envío de un option multiple ?> 
    <p>Cerveza:</p>
   <select multiple name="cerveza[]"> 
       <option value="SanMiguel">San Miguel</option> 
       <option value="Mahou">Mahou</option> 
       <option value="Heineken">Heineken</option> 
       <option value="Carlsberg">Carlsberg</option> 
       <option value="Aguila">Aguila</option> 
    </select><br> 

    <?php //Envío de un textarea ?> 
    <p>Comentarios:</p>
    <p>
      <textarea name="comentarios" rows="4" cols="50"></textarea>   
    </p>


  <p><input type="submit" value="Enviar"></p>  
</form>


    <?php

   echo "<pre>". var_dump($_POST); "</pre>";


    //Recepción de un input de texto sencillo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre'] ?? '');
    echo "Nombre recibido: " . htmlspecialchars($nombre)."<br>";   

    //Recepción de un radiobutton
    $genero = $_POST['genero'] ?? 'no especificado';
    echo "Género seleccionado: " . htmlspecialchars($genero)."<br>";      

    //Recepción de un checkbox
    $intereses = $_POST['intereses'] ?? [];
    echo "Intereses seleccionados: " . implode(", ", array_map('htmlspecialchars', $intereses))."<br>";   ;

    //Recepción de un option
    $pais = $_POST['pais'] ?? 'no especificado';
    echo "País seleccionado: " . htmlspecialchars($pais)."<br>";   

    //Recepción de un option multiple
    $cervezas = $_POST['cerveza'] ?? [];
    echo "Cervezas seleccionadas: " . implode(", ", array_map('htmlspecialchars', $cervezas))."<br>";   
    
    //Recepción de un textarea
    $comentarios = trim($_POST['comentarios'] ?? '');
    echo "Comentarios recibidos: " . htmlspecialchars($comentarios)."<br>";   

}

?>