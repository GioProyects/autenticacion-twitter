<?php
require_once 'TwitterAPIExchange.php';
define('CONSUMER_KEY', '14Vrox7LXSabtc3tq25IkW6eQ');
define('CONSUMER_SECRET', 'b9FdDir0UP44RVuMfotRwcOYwzx9P7hUnVUcioX5IkT6LMxw9r');
$TOKEN='449924072-ZS3sYSmyUJ2LSfrsXHTr3usEtNGMGo670DR2Od2h';
$TOKEN_SECRET='39mJyP7h9Hc0QAvb9GrSKGveUITfpzB1MdjMRaLRQcmiA';

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

// var_dump($credenciales);

$TOKEN=$credenciales["oauth_token"];
$TOKEN_SECRET=$credenciales["oauth_token_secret"];
$_SESSION["oauth_token"]=$credenciales["oauth_token"];
$_SESSION["oauth_access_token"]=$credenciales["oauth_token_secret"];

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
