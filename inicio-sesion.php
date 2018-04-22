<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true) {

}else {
  echo "<p> Esta pagina es solo para usuarios registrados</p>";
  echo "<br/><a href='index.php'> Iniciar Sesion</a>";
  exit;
}
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciado Sesion</title>
  </head>
  <body>
    <br>
    <br>
    <button type="button" id="btnDatos">Get datos</button>
    <?php echo "<p id='token' hidden>$_SESSION['oauth_token'] </p>"?>
    <?php echo "<p id='token' hidden>$_SESSION['oauth_access_token'] </p>"?>

    <!-- <a href="twitter/tweets.php">Get datos</a> -->
    <div id="resultados"></div>

    <script src="js/funciones.js"></script>

  </body>
</html>
