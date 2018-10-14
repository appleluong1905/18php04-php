<?php 
	class Product {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertProduct($name, $price, $image, $product_category_id){
			$sql = "INSERT INTO products (name, product_category_id, price, image) VALUES ('$name', $product_category_id, '$price', '$image')";
			return mysqli_query($this->conn, $sql);
		}
		//funtion frontend
		function getListProduct($category_id) {
			if ($category_id != ''){
				$sql = "SELECT products.id, products.name, products.price, products.image, product_categories.name AS category_name  FROM products INNER JOIN product_categories ON 
				products.product_category_id = product_categories.id WHERE product_category_id = $category_id";
			} else {
				$sql = "SELECT products.id, products.name, products.price, products.image, product_categories.name AS category_name  FROM products INNER JOIN product_categories ON 
				products.product_category_id = product_categories.id";
			}
			
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getListProductAdmin() {
			$sql = "SELECT products.id, products.name, products.price, products.image, product_categories.name AS category_name  FROM products INNER JOIN product_categories ON 
			products.product_category_id = product_categories.id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function getProductInfo($id) {
			$sql = "SELECT * FROM products WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditProduct($id, $name, $price, $image, $product_category_id){
			$sql = "UPDATE products SET name = '$name', product_category_id = $product_category_id, price = '$price', image = '$image' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function getListCategory($product_category_id = null) {
			$sql = "SELECT * FROM product_categories";
			$select = '';
			$result = mysqli_query($this->conn, $sql);
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name = $row['name'];
				$selected = ($id == $product_category_id)?'selected':'';
				$select.="<option value='$id' $selected>$name</option>";
			}
			return $select;
		}
	}
?>