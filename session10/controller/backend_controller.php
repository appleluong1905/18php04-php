<?php 
	include 'config/connectdb.php';
	include 'model/user.php';
	include 'model/product.php';
	class BackendController {
		/*
			* Kiem tra request tu view
		*/
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			//unlink('dist/img/gggggg.png');
			switch ($action) {
				case 'add_user':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					if(isset($_POST['add_user'])) {
						$name     = $_POST['name'];
						$username = $_POST['username'];
						$password = $_POST['password'];
						$userModel = new User();
						$userModel->InsertUser($name, $username, $password);
						header("Location: admin.php?action=list_user");
					}
					include 'view/backend/add_user.php';
					break;
				case 'list_user':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$userModel = new User();
					$listUser =$userModel->getListUser();
					//view du lieu
					include 'view/backend/list_user.php';
					break;
				case 'delete_user':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$id = $_GET['id'];
					$userModel = new User();
					$userModel->deleteUser($id);
					//view du lieu
					header("Location: admin.php?action=list_user");
					break;

				case 'edit_user':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$id = $_GET['id'];
					$userModel = new User();
					$userEdit = $userModel->getUserInfo($id);
					while ($row = $userEdit->fetch_assoc()) {
						$nameEdit = $row['name'];
						$usernameEdit = $row['username'];
					}
					if(isset($_POST['edit_user'])) {
						$name     = $_POST['name'];
						$username = $_POST['username'];
						$userModel = new User();
						$userModel->EditUser($id, $name, $username);
						header("Location: admin.php?action=list_user");
					}
					include 'view/backend/edit_user.php';
					break;		
				case 'add_product':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					// Lay danh muc san pham ra
					$productModel = new Product();
					$category = $productModel->getListCategory();
					if(isset($_POST['add_product'])) {
						$name                = $_POST['name'];
						$price               = $_POST['price'];
						$product_category_id = $_POST['product_category_id'];
						$image = $_FILES['image'];
						$path = 'dist/img/';
						$imageName = uniqid().$image['name'];
						move_uploaded_file($image['tmp_name'], $path.$imageName);
						$productModel = new Product();
						$productModel->InsertProduct($name, $price, $imageName, $product_category_id);
						header("Location: admin.php?action=list_product");
					}
					//view du lieu
					include 'view/backend/add_product.php';
					break;
				case 'list_product':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$productModel = new Product();
					$listProduct =$productModel->getListProductAdmin();
					//view du lieu
					include 'view/backend/list_product.php';
					break;
				case 'delete_product':
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					$id = $_GET['id'];
					$productModel = new Product();
					$productModel->deleteProduct($id);
					//view du lieu
					header("Location: admin.php?action=list_product");
					break;
				case 'edit_product':
					// kiem tra neu chua DANG NHAP thi khong cho vao trang nay
					// bat buoc quay lai trang login
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					// Lay duoc ID cua san pham can EDIT
					$id = $_GET['id'];

					// Lay tat ca thong tin cua san pham can EDIT ra theo ID
					$productModel = new Product();
					$productEdit = $productModel->getProductInfo($id);
					while ($row = $productEdit->fetch_assoc()) {
						$nameEdit            = $row['name'];
						$priceEdit           = $row['price'];
						$imageEdit           = $row['image'];
						$product_category_id = $row['product_category_id'];
					}
										// Lay danh muc san pham ra
					$productModel = new Product();
					$category = $productModel->getListCategory($product_category_id);
					// ket thuc viec lay thong tin theo ID


					// Kiem tra da submit de EDIT san pham chua?
					if(isset($_POST['edit_product'])) {
						// Lay duoc thong tin submit len!
						$name      = $_POST['name'];
						$price     = $_POST['price'];
						$product_category_id     = $_POST['product_category_id'];
						// Truoc mat, lay anh cu de luu
						$imageName = $imageEdit;
						//upload image
						// Kiem tra co chon anh de EDIT hay khong?
						//var_dump($_FILES['image']);exit();
						if(!$_FILES['image']['error']){
							$image = $_FILES['image'];
							$path = 'dist/img/';
							$imageName = uniqid().$image['name'];
							move_uploaded_file($image['tmp_name'], $path.$imageName);
							//delete old image
							unlink('dist/img/'.$imageEdit);
						}
						//end upload image
						$productModel = new Product();
						$productModel->EditProduct($id, $name, $price, $imageName, $product_category_id);
						header("Location: admin.php?action=list_product");
					}

					// Day la view hien thi EDIT
					include 'view/backend/edit_product.php';
					break;	
				case 'login':
					//view du lieu
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$userModel = new User();
						$checkLogin = $userModel->checkLogin($username, $password);
						if($checkLogin) {
							$_SESSION['login'] = $username;
							header("Location: admin.php?action=list_user");
						} else {
							header("Location: login.php");
						}
					}
					
					break;
				case 'logout':
					unset($_SESSION['login']);
					header("Location: login.php");
					//view du lieu
					break;
				default:
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					# code...
					break;
			}

		}
	}
?>