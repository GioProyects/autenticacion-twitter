<?php
session_start();
require_once 'TwitterAPIExchange.php';
define('CONSUMER_KEY', 'IsfOhNHmYtQS5myPZvXB7kqCf');
define('CONSUMER_SECRET', 'hSe6ZQbao5wEyIvlGFXhA1itlSME9NBhsqOsiKYm5jmOUFJLMx');
// $TOKEN='449924072-LfvTLKWeVwVGKqDCoISSOrAUDVZx2tSaJjEN6aDe';
// $TOKEN_SECRET='cXJLCOaSna7LycPH0TephGBQkYhwuv3h9lCdAqg8c96RU';

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true) {

}else {
  echo "<p> Necesita iniciar sesion con twitter</p>";
  echo "<br> <a href='index.php'> Regresar </a>;
}
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Panel de tweets</title>
  </head>
  <body>

  <br>
  <br>
  <p> <?php var_dump($_SESSION); ?>
  <p> <a href='cerrar-sesion.php'> Cerrar Sesion </p>

  </body>
</html>
