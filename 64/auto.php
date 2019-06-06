<!DOCTYPE html>
<html>
<head>
	<title>Enterlogin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<form action="auto_check.php" method="POST">
		<input type="" placeholder="e-mail" name="mail">
		<input type="" placeholder="password" name="password">
		<button>Enter</button>	
	</form>
	<?php echo $_GET['name'] ?>

	<a href="">Я не помню пароль</a>
</body>
</html>