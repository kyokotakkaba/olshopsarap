<?php 
session_start();

include __DIR__.'/../../config.php';
include __DIR__.'/../../database_connect.php';

$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);
$berhasilLogin = false;
$result = mysqli_query($conn, "SELECT * FROM pengguna");
while($row = mysqli_fetch_assoc($result)) {
	if ($email == $row['email'] && $password == $row['password']) {
		$berhasilLogin = true;
	}
}
if($berhasilLogin){
	if (isset($_POST['tetap_login'])) {
		setcookie("cookie_pengguna", $email, time() + (86400 * 7), "/"); // 86400 = 1 day
	}else{
		$_SESSION["sesi_pengguna"] = $email;
	}
	header("Location: ".$url_website."/pengguna/index.php");
	die();
}else{
	echo "<div class='alert alert-danger'>Gagal login</div>";
}

?>