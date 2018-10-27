<?php
	session_start();
	include 'controller/homepage_controller.php';
	$requestByCustomer = new HomePageController();
	$requestByCustomer->requestByCustomer();
?>