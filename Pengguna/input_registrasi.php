<?php 
include '../config.php';
include '../database_connect.php';

$email = mysqli_real_escape_string($conn,$_POST["email"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);

$sql = "INSERT INTO pengguna (email, password, nama) VALUES ('$email', '$password', '$nama')";

if (mysqli_query($conn, $sql)) {
	echo "Registrasi berhasil.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>

<a href='login.php'>Ke Halaman Login</a>