<?php
$mysqli = new Mysqli('localhost', 'admin', 'adminstrongPassword', 'pis_tzi');

$login = trim($_POST['login']);
$password = trim($_POST['password']);



if($login && $password){
	$query = $mysqli->query("SELECT * FROM sha WHERE login = '".$login."' AND password = '".$password."';");
	if ($query->num_rows > 0) {
		while($row = $query->fetch_assoc()) {
			$massage = 'Приветствую, '.$row["name"];
		}
	} else {
		$massage = 'Не удалось авторизовать';
	}
}else{
	$massage = 'Заполните оба поля';
}
echo $massage;
?>

