<?php
$mysqli = new Mysqli('localhost', 'root', '', 'pis_tzi');

$login = trim($_POST['login']);
$password = trim($_POST['password']);
$name = trim($_POST['name']);


if($login && $password && $name){

	$query = $mysqli->query("SELECT * FROM sha WHERE login = '".$login."';");
	if ($query->num_rows > 0) {
		echo 'Этот никнейм занят';
		exit();
	}
	
	$query = $mysqli->query("INSERT INTO `sha` VALUES(NULL, '$login', '$password', '$name')");
	echo 'Успех';
}else{
	echo 'Заполните все поля';
}

?>

