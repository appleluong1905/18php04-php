<?php 
	$colors = array(0 => '#abcc23', 1 => '#df1014');
	$sizes  = array(0 => 'S', 1 => 'M',2 => 'L');
	echo $_SESSION['login'];
	//isset();// kiem tra bien ton tai hay khong?
	echo isset($_SESSION['login'])?$_SESSION['login']:"";
	$_SESSION['cart'] = array();
	$_SESSION['cart']['id_san_pham1'] = $id;
	$_SESSION['cart']['id_san_pham2'] = $id;
	
?>