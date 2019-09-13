<?php 
include __DIR__.'/../redirect_login.php';
include __DIR__.'/../../database_connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pengguna</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	if(isset($_POST['submit'])) {
		include __DIR__.'/hapus_pengguna.php';
	}
	?>	
	<a href="../index.php">kembali ke dashboard</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Email</th>
				<th>Password</th>
				<th>Nama</th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$result = mysqli_query($conn, "SELECT * FROM pengguna");
			while($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['password'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td> <button><a href="edit_pengguna.php?email=<?php echo $row['email'] ?>">Edit</a></button> </td>
					<td> 
						<form action="" method="POST">
							<input type="submit" name="submit" value="Hapus" onclick="return confirm('Menghapus pengguna ini?')"> 
							<input type="hidden" name="email" value="<?php echo $row['email'] ?>"> 
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