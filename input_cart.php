<?php 
if(!empty($_GET["aksi"])) {
	switch($_GET["aksi"]) {
		case "tambah":
		$kode_barang = mysqli_real_escape_string($conn,$_POST["kode_barang"]);
		$jumlah = mysqli_real_escape_string($conn,$_POST["jumlah"]);
		$nama = mysqli_real_escape_string($conn,$_POST["nama_barang"]);
		$harga = mysqli_real_escape_string($conn,$_POST["harga"]);

		$_SESSION["isi_cart"][$kode_barang] = $kode_barang;
		$_SESSION["nama_barang"][$kode_barang] = $nama;
		$_SESSION["harga"][$kode_barang] = $harga;
		if (isset($_SESSION["jumlah"][$kode_barang])) {
			$_SESSION["jumlah"][$kode_barang] = $_SESSION["jumlah"][$kode_barang] + $jumlah;
		}else{
			$_SESSION["jumlah"][$kode_barang] = $jumlah;
		}

		echo "<div class='alert alert-success'>Barang ditambah ke keranjang belanja</div>";
		break;


		case "hapus":
		$kode_barang = mysqli_real_escape_string($conn,$_POST["kode_barang"]);
		unset($_SESSION["isi_cart"][$kode_barang]);
		unset($_SESSION["nama_barang"][$kode_barang]);
		unset($_SESSION["harga"][$kode_barang]);
		unset($_SESSION["jumlah"][$kode_barang]);

		echo "<div class='alert alert-info'>Barang dihapus dari keranjang belanja</div>";
		break;
		

		case "bersihkan":
		unset($_SESSION["isi_cart"]);
		unset($_SESSION["nama_barang"]);
		unset($_SESSION["harga"]);
		unset($_SESSION["jumlah"]);

		echo "<div class='alert alert-info'>keranjang belanja dibersihkan</div>";
		break;
		
	}
}

?>