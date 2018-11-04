<?php 
	class News {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
	
		//funtion frontend
		function getListNews() {
			$sql = "SELECT *  FROM news";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		
		function getNewsDetail($id) {
			$sql = "SELECT * FROM news WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}
?>