<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>News - 18php04</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	include 'controller/frontend_controller.php';
	$handleRequest = new FrontendController();
	$handleRequest->handleRequest();
?>
</body>
</html>
