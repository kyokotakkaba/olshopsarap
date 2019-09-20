<?php 
// include '../database_connect.php';

$id = mysqli_real_escape_string($conn,$_POST["id_kategori"]);

if (mysqli_query($conn, "DELETE FROM kategori_produk WHERE id_kategori='$id'")) {
    echo "<div class='alert alert-success'>Hapus berhasil</div>";
} else {
    echo "<div class='alert alert-danger'>Hapus gagal: " . mysqli_error($conn) . "</div>";
}

 ?>