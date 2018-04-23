<?php

session_start();
unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_access_token']);
unset($_SESSION['loggedin']);
session_destroy();

header('Location: https://logearse.herokuapp.com/index.php');

?>
