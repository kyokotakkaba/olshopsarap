<?php 
include '../config.php';
include 'redirect_login.php';
include '../database_connect.php';

$email = mysqli_real_escape_string($conn,$_GET["email"]);

if (mysqli_query($conn, "DELETE FROM pengguna WHERE email='$email'")) {
    echo "Hapus berhasil";
} else {
    echo "Hapus gagal: " . mysqli_error($conn);
}

 ?>
<br>
 <a href='manajemen_pengguna.php'> Kembali ke halaman sebelumnya </a>