<?php 
include __DIR__.'/redirect_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	Berhasil login ADMIN
	<br>
	<a href="pengguna/index.php">Pengguna</a>
	<br>
	<a href="kategori/index.php">Kategori</a>
	<br>
	<a href="barang/index.php">Barang</a>
	<br>
	<a href="logout.php">LOGOUT</a>
</body>
</html>