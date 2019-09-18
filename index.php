<?php 
session_start();
include __DIR__.'/config.php';
include __DIR__.'/database_connect.php';
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
	<?php 
	if(isset($_POST['submit'])) {
		include __DIR__.'/input_cart.php';
	}
	?>	
	<a href="pengguna/login/index.php">Login</a>
	<br>
	<a href="pengguna/registrasi/index.php">Registrasi</a>
	<br>
	
	<?php 
	$result = mysqli_query($conn, "SELECT * FROM barang NATURAL JOIN kategori_produk");
	while($row = mysqli_fetch_assoc($result)) {
		?>
		<div>
			<div><?php echo $row['kode_barang'] ?> </div>
			<div><?php echo $row['nama_barang'] ?> </div>
			<div><?php echo $row['nama_kategori'] ?> </div>
			<div><?php echo $row['harga'] ?> </div>
			<div><?php echo $row['stok'] ?> </div>
			<div><img src="<?php echo $url_website ?>/admin/barang/gambar/<?php echo $row['kode_barang'] ?>.png?nocache=<?php echo time(); ?>" width="200px" alt="Tidak ada gambar" /></div>
			<div>
				<form action="index.php?aksi=tambah" method="POST">
					Jumlah: <input type="number" name="jumlah" value="1">
					<input type="submit" name="submit" value="Tambahkan ke Keranjang"> 
					<input type="hidden" name="kode_barang" value="<?php echo $row['kode_barang'] ?>"> 
				</form>
			</div> 
		</div>
		<?php
	}
	?>


</body>
</html>