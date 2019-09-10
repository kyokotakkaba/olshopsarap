<?php 
include '../config.php';
include 'redirect_login.php';
include '../database_connect.php';

$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama"]);

if (mysqli_query($conn, "UPDATE pengguna SET password='$password', nama='$nama' WHERE email='$email'")) {
    echo "Edit berhasil";
} else {
    echo "Edit gagal: " . mysqli_error($conn);
}


?>

<br>
 <a href='edit_pengguna.php?email=<?php echo $email ?>'> Kembali ke halaman sebelumnya</a>