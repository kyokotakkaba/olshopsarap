<?php 
// include '../database_connect.php';

$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama"]);

if (mysqli_query($conn, "UPDATE pengguna SET password='$password', nama='$nama' WHERE email='$email'")) {
    echo "<div class='alert alert-success'>Edit berhasil</div>";
} else {
    echo "<div class='alert alert-danger'>Edit gagal: " . mysqli_error($conn). "</div>";
}
?>