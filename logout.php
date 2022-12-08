<?php
/*including header*/
require './inc/header.php';
session_start();
session_unset();
/*end user session*/
session_destroy();
/*direct to login page*/
header('Location: login.php');
/*including footer*/
require './inc/footer.php';
?>