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
		include __DIR__.'/hapus_kategori.php';
	}
	?>	
	<a href="../index.php">kembali ke dashboard</a>
	<br>
	<a href="tambah_kategori.php">Tambah Kategori</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$result = mysqli_query($conn, "SELECT * FROM kategori_produk");
			while($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $row['id_kategori'] ?></td>
					<td><?php echo $row['nama_kategori'] ?></td>
					<td> <button><a href="edit_kategori.php?id=<?php echo $row['id_kategori'] ?>">Edit</a></button> </td>
					<td> 
						<form action="" method="POST">
							<input type="submit" name="submit" value="Hapus" onclick="return confirm('Menghapus pengguna ini?')"> 
							<input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori'] ?>"> 
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