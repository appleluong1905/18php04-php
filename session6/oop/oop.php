<?php 
class User {
	var $username;
	var $password;
	// public, protected, private
	function register() {
		echo "<br/> Register user";
	}
	private function edit() {
		echo "<br/> Edit user";
	}
	function delete() {
		echo "<br/> Delete user";
	}
	function demo() {
		echo "<br>---demo---";
		$this->edit();
		echo "<br>---";
	}
}

$user = new User();
// $user->register();
//$user->edit();
$user->demo();

class Student extends User {
	function register() {
		echo "<br/> Student register";
	}
	function demoStudent() {
		echo "<br>---demo---";
		$this->edit();
		echo "<br>---";
	}
}

$student = new Student();
//$student->register();
//$student->edit();
$student->demoStudent();
?>