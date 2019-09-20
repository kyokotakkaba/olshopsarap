<?php 
include __DIR__.'/../redirect_login.php';
include __DIR__.'/../../database_connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Olshop Sarap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	if(isset($_POST['submit'])) {
		include __DIR__.'/submit_tambah_barang.php';
	}
	?>
	<a href="index.php">Kembali</a>
	<form action="" method="post" enctype="multipart/form-data">
		<br>
		<br>
		kode: <input type="text" name="kode_barang"> 
		<br>
		nama: <input type="text" name="nama_barang">
		<br>
		harga: <input type="text" name="harga">
		<br>
		stok: <input type="text" name="stok">
		<br>
		kategori : <select name="kategori">

			<?php
		//dropdown kategori
			$result = mysqli_query($conn, "SELECT * FROM kategori_produk");
			while ($row_kategori = mysqli_fetch_assoc($result)) {
				echo "<option value='" . $row_kategori['id_kategori'] . "'>" . $row_kategori['nama_kategori'] . "</option>";
			}
			?>

		</select>


		<br>


		Gambar Produk (JPG atau PNG):
		<input type="file" name="gambar" onchange="tampilpreview(this);">
		<br>
		Preview :
		<img id="preview" src="#" width="200px" alt="Tidak ada gambar" />
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>

<script type="text/javascript">
	function tampilpreview(input) {
		var imgPath = input.value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
		if (extn == "png" || extn == "jpg" || extn == "jpeg"){
			if (input.files[0].size<2000000) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						document.getElementById("preview").src = e.target.result;
					}

					reader.readAsDataURL(input.files[0]);
				}
			}else{
				input.value = "";
				document.getElementById("preview").src = "#";
				alert("Ukuran gambar terlalu besar. Pastikan besar file kurang dari 2MB.");
			}		
		}else{
			input.value = "";
			document.getElementById("preview").src = "#";
			alert("Gambar harus berekstensi JPG atau PNG");
		}
		
	}
</script>


</html>