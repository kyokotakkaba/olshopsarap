<?php 
include '../config.php';
include 'redirect_login.php';
include '../database_connect.php';
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
	<a href="dashboard.php">kembali ke dashboard</a>
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
					<td> <a href="edit_pengguna.php?email=<?php echo $row['email'] ?>">Edit</a> </td>
					<td> <a href="hapus_pengguna.php?email=<?php echo $row['email'] ?>" onclick="return confirm('Menghapus pengguna ini?')">Hapus</a> </td>
				</tr>
				<?php
			}
			?>
			
		</tbody>
	</table>
</body>
</html>