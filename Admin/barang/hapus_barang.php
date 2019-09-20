<?php 
// include '../database_connect.php';

$id = mysqli_real_escape_string($conn,$_POST["kode_barang"]);

if (mysqli_query($conn, "DELETE FROM barang WHERE kode_barang='$id'")) {
    echo "<div class='alert alert-success'>Hapus berhasil</div>";
} else {
    echo "<div class='alert alert-danger'>Hapus gagal: " . mysqli_error($conn) . "</div>";
}

 ?>