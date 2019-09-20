<?php 
// include '../database_connect.php';

$email = mysqli_real_escape_string($conn,$_POST["email"]);

if (mysqli_query($conn, "DELETE FROM pengguna WHERE email='$email'")) {
    echo "<div class='alert alert-success'>Hapus berhasil</div>";
} else {
    echo "<div class='alert alert-danger'>Hapus gagal: " . mysqli_error($conn) . "</div>";
}

 ?>