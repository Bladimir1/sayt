<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container bg-light">
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
		$query = mysqli_query($connect, "SELECT * FROM playlist WHERE id = " . $_GET['id']);
	?>
	<div class="col-2 h-50">
		<?php
			$logo = $query->fetch_assoc();
			echo '<div><img class="w-50 rounded-circle" src="' . $logo['avatar'] . '"></div>';
			echo '<h4>' . $logo['name'] . '</h4>';
			echo '<h4>' . $logo['surname'] . '</h4>';
			echo '<h4>' . $logo['login'] . '</h4>';
			echo '<h4>' . $logo['mail'] . '</h4>';
		?>
	</div>
	
	<form method="POST" action="change.php" enctype="multipart/form-data">
		<?php 
			echo '<input type="hidden" name="id" value="' . $logo['id'] . '" class="form-control">';
		 	echo '<input type="file" placeholder="music" name="music" value="' . $_POST['music'] . '" class="form-control">'; 
			echo '<input type="" placeholder="music_name" name="music_name" value="' . $_POST['music_name'] . '" class="form-control">'; ?>
		<button>Edit</button>
	</form>
	<?php 
	$query1 = mysqli_query($connect, "SELECT * FROM playlist_music");
	 ?>

	<?php for($i = 0; $i < $query1->num_rows; $i++){ ?>
		<?php $logo1 = $query1->fetch_assoc(); ?>
	 	<div class="text-center">
			<div class="col-8 bg-light">
				<!---- music_name ---->
				<div class="col-3">
					<?php  
						echo $logo1['music_name'];
						echo '<audio src="' . $logo1['music'] . '" controls=""></audio>';
					?>
				</div>
			</div>
		</div>

	<?php }; ?>
</div>
</body>
</html>
