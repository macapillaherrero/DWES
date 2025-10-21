<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>
   <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
  <label for="search_get">Buscar:</label>
  <input type="text" id="search_get" name="termino">
  <button type="submit">Enviar</button>

  <?php 
echo "REQUEST:<pre>". var_dump($_REQUEST); "</pre></br>";


  var_dump($_GET);

      echo "<br>";
    echo "GET method:<br>";
    $termino = $_GET['termino'] ?? 'nada';

    /* Otra forma de hacerlo:*/

    if(isset($_GET['termino'])) {
        $termino = $_GET['termino'];
    }else {
        $termino = '';
    }

    var_dump($_POST);

    echo "<br>";
    echo "POST method:<br>";
    $termino = $_POST['termino'] ?? 'nada';

    echo "Búsqueda: " . htmlspecialchars($termino);
    
   ?>
  </form>
</body>
</html>