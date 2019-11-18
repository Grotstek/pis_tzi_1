<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>без имени</title>
	<script src="jquery.min.js"></script>
	<script src="sha.js"></script>
	
	<script>
	jQuery(document).ready(function() {
    jQuery(".register").bind("click", function() {
		
		if(jQuery('.login').val() && jQuery('.password').val()){
			var login = sha256(jQuery('.login').val());
			var password = sha256(jQuery('.password').val());
			var name = jQuery('.name').val();
			
			
			jQuery('.login').val('');
			jQuery('.password').val('');
			jQuery('.name').val('');

			
			jQuery.ajax({
				url: "insert.php",
				type: "POST",
				data: {login:login, password:password, name:name}, // Передаем данные для записи
				success: function(xhr, data, textStatus) {
					alert(xhr);
					if(xhr === "Успех")
					{
						window.location.replace("index.php");
					}	
				},
				error:	function(xhr, textStatus, errorObj){ 
					alert(textStatus);
				}

			});
			
			
		}else{
			alert("Заполните все поля");
		}
	return false;
    });
});

	</script>
</head>

<body>
	<form action="" method="post" name="registerform">
			<p><label>Логин:<br>
				<input class="login" size="30" type="text"></label></p>
			<p><label>Пароль:<br>
				<input class="password" size="30" type="password"></label></p>
			<p><label>Имя:<br>
				<input class="name" size="30" type="text"></label></p>
			<p><input class="register" type="submit" value="Регистрация"></p>
	</form>
</body>

</html>
