<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, "SELECT * FROM playlist WHERE mail = '". $_POST['mail'] . "' and password = '" . $_POST['password']. "'");
	$logo = $query->fetch_assoc();
	if ($query->num_rows == 0){
		header('Location:http://myserver/64/auto.php?name=Такого аккаунта нет');
	}else{
		header('Location:http://myserver/64/login.php?id=' . $logo['id']);

	};
?>

