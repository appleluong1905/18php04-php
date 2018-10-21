<?php
//echo time();
//setcookie('name', 'PHP04', time() + 10);

echo $_COOKIE['name'];


unset($_COOKIE['name']);
setcookie('name', '', time() - 10);

?>