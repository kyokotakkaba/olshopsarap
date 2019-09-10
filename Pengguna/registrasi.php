<?php 
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="input_registrasi.php" method="post" onsubmit="validasi(event)">
		<h1>Registrasi</h1>
		<br>
		email: <input type="email" name="email">
		<br>
		nama: <input type="text" name="nama">
		<br>
		password: <input type="password" name="password" id="password">
		<br>
		konfirmasi password: <input type="password" id="konfirmasi_password">
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
<script>
	function validasi(e){
		if (document.getElementById('password').value != document.getElementById('konfirmasi_password').value) {
			e.preventDefault();
			alert("Kolom konfirmasi password tidak sama");
		}
	}


</script>


</html>