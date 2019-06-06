<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'nogovitsunvova', 'znk7Rb23aW', 'nogovitsunvova');
		$query = mysqli_query($connect, "SELECT * FROM playlist WHERE id = " . $_GET['id']);
	?>

	<?php
		$logo = $query->fetch_assoc();
		echo '<h4>' . $logo['name'] . '</h4>';
		echo '<h4>' . $logo['mail'] . '</h4>';
	?>
	<h4></h4>
	<form method="POST" action="change.php" enctype="multipart/form-data">
		<?php 
			echo '<input type="" name="id" value="' . $logo['id'] . '" class="form-control">';
		 	echo '<input type="file" placeholder="music" name="music" value="' . $_POST['music'] . '" class="form-control">
		'; 
			echo '<input type="" placeholder="music_name" name="music_name" value="' . $_POST['music_name'] . '" class="form-control">'; ?>
		<button>Edit</button>
	</form>

	<?php for($i = 0; $i < $query->num_rows; $i++){ ?>

	 	<div class="bg-secondary row text-center">
			<div class="col-1 bg-white">
				<a><?php echo '<img class="w-100" src="' . $logo['avatar'] . '">'; ?></a>
			</div>
			<div class="col-8 bg-white">
				<div class="col-2 bg-white">

				</div>
				<?php 
					$connect = mysqli_connect('127.0.0.1', 'nogovitsunvova', 'znk7Rb23aW', 'nogovitsunvova');
					$query = mysqli_query($connect, "SELECT * FROM playlist_music");
					$logo = $query->fetch_assoc();
			 	?>
				<!---- music_name ---->
				<div class="col-3">
					<?php  
						echo $logo['music_name'];
						echo '<audio src="' . $logo['music'] . '" controls=""></audio>';
					?>
				</div>
				<!---- music ---->
				<div>
					<audio></audio>
				</div>
			</div>
		</div>

<?php }; ?>

</body>
</html>
