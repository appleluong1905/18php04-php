<?php 
include 'model/model.php';
class Controller {
	function handleRequest() {
		$action = isset($_GET['action'])?$_GET['action']:'home';
		switch ($action) {
			case 'home':
				// Lay du lieu trang chu ra
				$model = new Model();
				$home = $model->getHomeData();
				//goi view can do du lieu
				include 'view/home.php';
				break;
			case 'about':
				// Lay du lieu trang chu ra
				$model = new Model();
				$about = $model->getAboutData();
				//goi view can do du lieu
				include 'view/about.php';
				break;
			case 'contact':
				# code...
				break;
			case 'news':
				# code...
				break;
			default:
				# code...
				break;
		}
	}
}

?>