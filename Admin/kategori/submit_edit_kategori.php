<?php 
// include '../database_connect.php';

$id = mysqli_real_escape_string($conn,$_POST["id_kategori"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama_kategori"]);

if (mysqli_query($conn, "UPDATE kategori_produk SET nama_kategori='$nama' WHERE id_kategori='$id'")) {
    echo "<div class='alert alert-success'>Edit berhasil</div>";
} else {
    echo "<div class='alert alert-danger'>Edit gagal: " . mysqli_error($conn). "</div>";
}
?>