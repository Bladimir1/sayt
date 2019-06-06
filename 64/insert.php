<?php 
	$connect = mysqli_connect('127.0.0.1', 'nogovitsunvova', 'znk7Rb23aW', 'nogovitsunvova'); 
	if ($_FILES['music']['name'] != null) {
		$query = mysqli_query($connect, "INSERT INTO playlist_music (music_name, music) VALUES ('" . $_POST['music_name'] . "', music = 'music/" . $_FILES['music']['name'] . "' WHERE id = '" . $_POST['id'] . "')");
		move_uploaded_file($_FILES['music']['tmp_name'], 'music/' . $_FILES['music']['name']);
		header('Location: http://nogovitsunvova.myjino.ru/login.php?id=' . $_POST['id'] );
	} else {
		$query = mysqli_query($connect, "INSERT INTO playlist_music (music_name, music) VALUES ('" . $_POST['music_name'] . "', WHERE id = '" . $_POST['id'] . "')");
		header('Location: http://nogovitsunvova.myjino.ru/login.php?id=' . $_POST['id'] );
	};
?>
