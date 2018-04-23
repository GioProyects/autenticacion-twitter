<?php
session_start();
require_once 'TwitterAPIExchange.php';
define('CONSUMER_KEY', 'TbRLT7VPwbeJPCd9y5Ul1CjcR');
define('CONSUMER_SECRET', 'vh1EjFI7HpeKdR5WNNU361Dw9pTRWSIlcVXqH3SJXQ3tDmEVaw');
$TOKEN='449924072-TUNDtahCwzLnS7LzICAlYT5dSFg75UwikrEHmueS';
$TOKEN_SECRET='akIH21y5wZWKMSqfNTSsRTKmgrg0HuqrrJPSlIFLxQe1b';

$settings = array(
  'oauth_access_token' => $TOKEN,
  'oauth_access_token_secret' => $TOKEN_SECRET,
  'consumer_key' => CONSUMER_KEY,
  'consumer_secret' => CONSUMER_SECRET
);


$url="https://api.twitter.com/oauth/request_token";
$requestMethod="POST";
$postfields=array(
);

$twitter=new TwitterAPIExchange($settings);
$response=$twitter->buildOauth($url,$requestMethod)
                  ->setPostfields($postfields)
                  ->performRequest();
// var_dump($response);
$porcion=explode("&",$response);
$credenciales = array();
foreach ($porcion as $k) {
  $temp=explode("=",$k);
  $credenciales[$temp[0]]=$temp[1];
}

// var_dump($credenciales["oauth_token_secret"]);

$TOKEN=$credenciales["oauth_token"];
$TOKEN_SECRET=$credenciales["oauth_access_token"];

$_SESSION["oauth_token"]=$credenciales["oauth_token"];
$_SESSION["oauth_access_token"]=$credenciales["oauth_access_token"];
$_SESSION["loggedin"]=true;

// var_dump($TOKEN_SECRET);
//
$url2="https://api.twitter.com/oauth/authorize";
$requestMethod2="GET";
$getfield2="?oauth_token=".$credenciales["oauth_token"];

$settings = array(
  'oauth_access_token' => $TOKEN,
  'oauth_access_token_secret' => $TOKEN_SECRET,
  'consumer_key' => CONSUMER_KEY,
  'consumer_secret' => CONSUMER_SECRET
);

$twitter=new TwitterAPIExchange($settings);
$response2 = $twitter->setGetfield($getfield2)
    ->buildOauth($url2, $requestMethod2)
    ->performRequest();

echo $response2;
