<?php 
include __DIR__.'/../redirect_login.php';
include __DIR__.'/../../database_connect.php';


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
		include __DIR__.'/submit_edit_kategori.php';
	}
	?>
	<a href="index.php">Kembali</a>
	<form action="" method="post">
		
		<?php 
		$id = mysqli_real_escape_string($conn,$_GET["id"]);
		$result = mysqli_query($conn, "SELECT * FROM kategori_produk where id_kategori='$id'");
		$row = mysqli_fetch_assoc($result);
		?>

		<br>
		id: <input type="text" value="<?php echo $row['id_kategori']?>" disabled> 
		<input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori']?>">
		<br>
		nama: <input type="text" name="nama_kategori" value="<?php echo $row['nama_kategori']?>">
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>