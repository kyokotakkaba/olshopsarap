<?php 
include 'redirect_login.php';
include '../database_connect.php';


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
		include 'submit_edit_pengguna.php';
	}
	?>
	<a href="manajemen_pengguna.php">Kembali</a>
	<form action="" method="post">
		
		<?php 
		$email = mysqli_real_escape_string($conn,$_GET["email"]);
		$result = mysqli_query($conn, "SELECT * FROM pengguna where email='$email'");
		$row = mysqli_fetch_assoc($result);
		?>

		<br>
		email: <input type="email" value="<?php echo $row['email']?>" disabled> 
		<input type="hidden" name="email" value="<?php echo $row['email']?>">
		<br>
		password: <input type="password" name="password" value="<?php echo $row['password']?>">
		<br>
		nama: <input type="text" name="nama" value="<?php echo $row['nama']?>">
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>