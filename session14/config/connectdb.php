<?php 
	class ConnectDB {
		function connect(){
			$server = 'localhost'; //$server = '127.0.0.1';
			$username = 'root';
			$password = 'none'; //$password = '';
			$database = '18php04_news';
			$this->conn = mysqli_connect($server, $username, $password, $database);

			mysqli_set_charset($this->conn,"utf8");
			
			return $this->conn;
		}
	}
?>