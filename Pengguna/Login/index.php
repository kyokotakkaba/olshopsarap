<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Olshop Sarap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	if(isset($_POST['submit'])) {
		include __DIR__.'/konfirmasi_login.php';
	}
	?>
	<form action="" method="post">
		<h1>PENGGUNA</h1>
		<br>
		email: <input type="email" name="email">
		<br>
		password: <input type="password" name="password">
		<br>
		<input type="checkbox" name="tetap_login"> Tetap Login
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>