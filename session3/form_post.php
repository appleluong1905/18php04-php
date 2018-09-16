<!DOCTYPE html>
<html>
<head>
	<title>Form post - session 3</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	$errName = '';
	$errPass = '';
	$check = true;
	if (isset($_POST['submit'])) {
		var_dump($_FILES);exit();
		$name = $_POST['name'];
		$password = $_POST['password'];
		if ($name == '') {
			$check = false;
			$errName = 'Please input your name!';
		}
		if ($password == '') {
			$check = false;
			$errPass = 'Please input your password!';
		}
		if ($check) {
			echo "Register success!";
		}
	}	
	?>
	<h1>Register form</h1>
	<form action="#" name="RegisterForm" method="post" enctype="multipart/form-data">
		<p>Name: <input type="text" name="name">
			<span class="error"><?php echo $errName;?></span>
		</p>
		<p>Password: <input type="password" name="password">
			<span class="error"><?php echo $errPass;?></span>
		</p>
		<p>Avatar: <input type="file" name="avatar"></p>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>