<?php 
	$connect = mysqli_connect('127.0.0.1', 'nogovitsunvova', 'znk7Rb23aW', 'nogovitsunvova');
	$query = mysqli_query($connect, "INSERT INTO  playlist (mail, name, surname, login, avatar, password) VALUES ('" . $_POST['mail'] . "', '" . $_POST['name'] . "', '" . $_POST['surname'] . "', '" . $_POST['login'] . "', 'images/" . $_FILES['avatar']['name'] . "', '" . $_POST['password'] . "')");
	move_uploaded_file($_FILES['avatar']['tmp_name'], 'images/' . $_FILES['avatar']['name']);
	$query = mysqli_query($connect, 'SELECT * FROM playlist WHERE mail = "'. $_POST['mail'] .'" and password = "'. $_POST['password'] . '"');
	$logo = $query->fetch_assoc();
	header('Location:http://nogovitsunvova.myjino.ru/login.php?id=' . $logo['id'] );
?>