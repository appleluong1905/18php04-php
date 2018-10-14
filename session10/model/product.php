<?php 
	class Product {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertProduct($name, $price, $image){
			$sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
			return mysqli_query($this->conn, $sql);
		}
		//funtion frontend
		function getListProduct() {
			$sql = "SELECT * FROM products";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getListProductAdmin() {
			$sql = "SELECT * FROM products";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
	}
?>