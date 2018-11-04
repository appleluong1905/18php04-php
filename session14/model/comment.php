<?php 
	class Comment {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function saveComment($user_id, $news_id, $content){
			$sql = "INSERT INTO comments (user_id, news_id, content) VALUES ($user_id, $news_id, '$content')";
			return mysqli_query($this->conn, $sql);
		}
		function getListCommentByNews($news_id){
			$sql = "SELECT *  FROM comments INNER JOIN users ON 
			comments.user_id = users.id WHERE news_id = $news_id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}
?>