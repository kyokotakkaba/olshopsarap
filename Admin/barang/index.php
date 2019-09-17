<?php 
include __DIR__.'/../redirect_login.php';
include __DIR__.'/../../database_connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	if(isset($_POST['submit'])) {
		include __DIR__.'/hapus_barang.php';
	}
	?>	
	<a href="../index.php">kembali ke dashboard</a>
	<br>
	<a href="tambah_barang.php">Tambah Barang</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Kategori</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$result = mysqli_query($conn, "SELECT * FROM barang NATURAL JOIN kategori_produk");
			while($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $row['kode_barang'] ?></td>
					<td><?php echo $row['nama_barang'] ?></td>
					<td><?php echo $row['nama_kategori'] ?></td>
					<td><?php echo $row['harga'] ?></td>
					<td><?php echo $row['stok'] ?></td>
					<td><button><a href="edit_barang.php?id=<?php echo $row['kode_barang'] ?>">Edit</a></button> </td>
					<td> 
						<form action="" method="POST">
							<input type="submit" name="submit" value="Hapus" onclick="return confirm('Menghapus pengguna ini?')"> 
							<input type="hidden" name="kode_barang" value="<?php echo $row['kode_barang'] ?>"> 
						</form> 
					</td>
				</tr>
				<?php
			}
			?>
			
		</tbody>
	</table>
</body>
</html>