<?php

session_start();
unset ($SESSION['username']);
session_destroy();

header('Location: https://logearse.herokuapp.com/index.php');

?>
