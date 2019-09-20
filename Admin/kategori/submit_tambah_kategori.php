<?php 
// include '../database_connect.php';

$id = mysqli_real_escape_string($conn,$_POST["id_kategori"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama_kategori"]);

if (mysqli_query($conn, "INSERT INTO kategori_produk (id_kategori, nama_kategori) VALUES ('$id', '$nama')")) {
    echo "<div class='alert alert-success'>Tambah data berhasil</div>";
} else {
    echo "<div class='alert alert-danger'>Tambah data gagal: " . mysqli_error($conn). "</div>";
}
?>