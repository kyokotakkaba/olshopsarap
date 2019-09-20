<?php 
// include '../database_connect.php';

$id = mysqli_real_escape_string($conn,$_POST["kode_barang"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama_barang"]);
$harga = mysqli_real_escape_string($conn,$_POST["harga"]);
$stok = mysqli_real_escape_string($conn,$_POST["stok"]);
$kategori = mysqli_real_escape_string($conn,$_POST["kategori"]);


//Upload gambar

//check apakah ada file yang diupload
if (!empty($_FILES['gambar']['name'])){
	$target_dir = __DIR__.'/gambar/';
	$target_file = $target_dir . $id.".png";
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo(basename($_FILES["gambar"]["name"]),PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	$check = getimagesize($_FILES["gambar"]["tmp_name"]);
	if($check !== false) {
	// echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["gambar"]["size"] > 2000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		//uploading
		if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
			//echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";

		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}





// ke database
if (mysqli_query($conn, "INSERT INTO barang (kode_barang, nama_barang, harga, stok, id_kategori) VALUES ('$id', '$nama', '$harga', '$stok', '$kategori')")) {
	echo "<div class='alert alert-success'>Tambah data berhasil</div>";
} else {
	echo "<div class='alert alert-danger'>Tambah data gagal: " . mysqli_error($conn). "</div>";
}

?>