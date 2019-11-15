<?php
/*
 * index.php
 * 
 * Copyright 2019 Админ <Админ@DESKTOP-53SEPAI>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>без имени</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.30" />
	<script src="jquery.min.js"></script>
	<script src="sha.js"></script>
	<script>
		jQuery(document).ready(function() {
			jQuery(".register").bind("click", function() {
				window.location.replace("reg.php");
			return false;
			});
		});
		
		jQuery(document).ready(function() {
			jQuery(".loginf").bind("click", function() {
				var login = sha256(jQuery('.login').val());
				var password = sha256(jQuery('.password').val());
				
				
				jQuery.ajax({
					url: "select.php",
					type: "POST",

					data: {login:login, password:password}, // Передаем данные для записи
					success: function(xhr, data, textStatus) {
						alert(xhr);	
					},
					error:	function(xhr, textStatus, errorObj){ 
						alert(textStatus);
		
					}
				});
				
			return false;
			});
		});
	</script>
</head>

<body>
	<form action="" method="post" name="loginform">
			<p><label>Логин:<br>
				<input class="login" size="30" type="text"></label></p>
			<p><label>Пароль:<br>
				<input class="password" size="30" type="password"></label></p>
			<p><input class="loginf" type="submit" value="Войти"></p>
	</form>
	<p><input class="register" type="submit" value="Регистрация"></p>
	
</body>

</html>
