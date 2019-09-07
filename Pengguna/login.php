<?php 
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Olshop Sarap</title>
</head>
<body>
	<form action="konfirmasi_login.php" method="post">
		<h1>PENGGUNA</h1>
		<br>
		email: <input type="email" name="email">
		<br>
		password: <input type="password" name="password">
		<br>
		<input type="checkbox" name="tetap_login"> Tetap Login
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>