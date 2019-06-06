<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	if ($_FILES['music_name']['name'] != null) {
		$query = mysqli_query($connect, "INSERT INTO playlist_music (id, music_name, music) VALUES ('" . $_POST['id'] . "', '" . $_POST['music_name'] . "', music_name = 'music/" . $_FILES['music_name']['name'] . "' WHERE id = '" . $_POST['id'] . "')");
		move_uploaded_file($_FILES['music_name']['tmp_name'], 'music/' . $_FILES['music_name']['name']);
		header('Location: http://myserver/64/login.php?id=' . $_POST['id'] );
	}
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, "SELECT * FROM playlist_music");
	$logo = $query->fetch_assoc();
	header('Location: http://myserver/64/login.php?id=' . $logo['id']);
?>
