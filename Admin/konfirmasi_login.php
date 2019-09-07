<?php 
session_start();

include '../config.php';
include '../database_connect.php';

$username = $_POST["email"];
$password = $_POST["password"];
$berhasilLogin = false;
$result = mysqli_query($conn, "SELECT * FROM admin");
while($row = mysqli_fetch_assoc($result)) {
	if ($username == $row['email'] && $password == $row['password']) {
		$berhasilLogin = true;
	}
}
if($berhasilLogin){
	if (isset($_POST['tetap_login'])) {
		setcookie("cookie_admin", $username, time() + (86400 * 7), "/"); // 86400 = 1 day
	}else{
		$_SESSION["sesi_admin"] = $username;
	}
	header("Location: ".$url_website."/admin/dashboard.php");
	die();
}else{
	header("Location: ".$url_website."/admin/login.php");
	die();
}

?>