<?php
session_start();

// var_dump($_SESSION); si regresa los valores de los tokens


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true) {
  require_once 'TwitterAPIExchange.php';
  define('CONSUMER_KEY', 'IsfOhNHmYtQS5myPZvXB7kqCf');
  define('CONSUMER_SECRET', 'hSe6ZQbao5wEyIvlGFXhA1itlSME9NBhsqOsiKYm5jmOUFJLMx');
  $TOKEN=$_SESSION["oauth_token"];
  $TOKEN_SECRET=$_SESSION["oauth_access_token"];

  $url="https://api.twitter.com/1.1/statuses/update.json";
  $postfields=array(
    "status"=>"Hola mundo twitter"
  );
  $requestMethod="POST";

  $settings = array(
      'oauth_access_token' => $TOKEN,
      'oauth_access_token_secret' => $TOKEN_SECRET,
      'consumer_key' => CONSUMER_KEY,
      'consumer_secret' => CONSUMER_SECRET
  );

  $twitter=new TwitterAPIExchange($settings);
  $response=$twitter->buildOauth($url,$requestMethod)
          ->setPostfields($postfields)
          ->performRequest();
  var_dump($response);
}else{
  echo array(
    "Error"=>"debe iniciar sesion"
  );
}

// array(3) {
//   ["oauth_token"]=>
//   string(27) "_kWZjAAAAAAA5uSDAAABYu80QUQ"
//   ["oauth_access_token"]=>
//   string(32) "sjUK19r0ItSkyP2KB800YRLUJNt5m8Kw"
//   ["loggedin"]=>
//   bool(true)
// }










 ?>
