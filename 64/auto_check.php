<?php 
	$connect = mysqli_connect('127.0.0.1', 'nogovitsunvova', 'znk7Rb23aW', 'nogovitsunvova');
	$query = mysqli_query($connect, 'SELECT * FROM playlist WHERE mail = "'. $_POST['mail'] .'" and password = "'. $_POST['password']);
	$logo = $query->fetch_assoc();
	if ($query->num_rows == 0){
		header('Location:http://nogovitsunvova.myjino.ru/auto.php?name=Такого аккаунта нет');
	}else{
		header('Location:http://nogovitsunvova.myjino.ru/login.php?id=' . $logo['id']);

	};
?>

