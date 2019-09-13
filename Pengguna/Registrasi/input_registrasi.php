<?php 
include __DIR__.'/../../database_connect.php';

$email = mysqli_real_escape_string($conn,$_POST["email"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);

$sql = "INSERT INTO pengguna (email, password, nama) VALUES ('$email', '$password', '$nama')";

if (mysqli_query($conn, $sql)) {
	echo "<div class='alert alert-success'>Registrasi berhasil</div>";
} else {
    echo "<div class='alert alert-danger'>Gagal Registrasi: " . $sql . "<br>" . mysqli_error($conn). "</div>";
}
?>