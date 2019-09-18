<?php 
if(!empty($_GET["aksi"])) {
	switch($_GET["aksi"]) {
		case "tambah":
		$kode_barang = mysqli_real_escape_string($conn,$_POST["kode_barang"]);
		$jumlah = mysqli_real_escape_string($conn,$_POST["jumlah"]);
		
		break;
		case "remove":
		
		break;
		case "empty":
		
	}
}




$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);
$berhasilLogin = false;
$result = mysqli_query($conn, "SELECT * FROM admin");
while($row = mysqli_fetch_assoc($result)) {
	if ($email == $row['email'] && $password == $row['password']) {
		$berhasilLogin = true;
	}
}
if($berhasilLogin){
	if (isset($_POST['tetap_login'])) {
		setcookie("cookie_admin", $email, time() + (86400 * 7), "/"); // 86400 = 1 day
	}else{
		$_SESSION["sesi_admin"] = $email;
	}
	header("Location: ".$url_website."/admin/index.php");
	die();
}else{
	echo "<div class='alert alert-danger'>Gagal login</div>";
}

?>