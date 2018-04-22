<?php
session_start();
// require_once 'twitter/TwitterAPIExchange.php';
// define('CONSUMER_KEY', 'IsfOhNHmYtQS5myPZvXB7kqCf');
// define('CONSUMER_SECRET', 'hSe6ZQbao5wEyIvlGFXhA1itlSME9NBhsqOsiKYm5jmOUFJLMx');
// // $TOKEN='449924072-LfvTLKWeVwVGKqDCoISSOrAUDVZx2tSaJjEN6aDe';
// // $TOKEN_SECRET='cXJLCOaSna7LycPH0TephGBQkYhwuv3h9lCdAqg8c96RU';
//
// if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true) {
//   // var_dump($_SESSION);
//   $datos = array(
//     'saludo' => "hola",
//     "datos_sesion"=>$_SESSION
//   );
//
//   echo json_encode($datos);
//
// }else {
//
//   echo json_encode(arra(
//     "Error"=> "Necesita iniciar sesion con twitter",
//     "Regreso"=> "index.php"
//   ));
// }

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
  echo json_encode(array(
    "Saludo"=>"Hola",
    "datos_sesion"=>$_SESSION
  ));
} else {
  echo json_encode(array(
    "mensaje"=>"algo salio mal"
  ));
}



 ?>
