<?php 
session_start();
// khai bao session
$_SESSION['name'] = 'PHP04 SDC';
$_SESSION['year'] = 2018;

echo $_SESSION['name'];

unset($_SESSION['name']);

session_destroy();
?>