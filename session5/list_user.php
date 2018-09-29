<!DOCTYPE html>
<html>
<head>
	<title>List user - session 5</title>
</head>
<body>
	<?php 
	include 'connectdb.php';
	$sql = "SELECT * FROM users";
	$result = mysqli_query($connect, $sql);
	?>
	<h1>List users</h1>
	<?php 
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo $row['id'].' - '.$row['username'].' - '.$row['password'];
				echo "<br>";
			}
		}
	?>

</body>
</html>