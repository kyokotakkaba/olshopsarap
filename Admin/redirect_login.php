<?php 
include '../config.php';
session_start();
$isLoggedIn = false;
if (!empty($_SESSION["sesi_admin"])) {
    $isLoggedIn = true;
}else if(!empty($_COOKIE["cookie_admin"])){
	$_SESSION["sesi_admin"] = $_COOKIE["cookie_admin"];
	$isLoggedIn = true;
}

if (!$isLoggedIn) {
	header("Location: ".$url_website."/admin/login.php");
	die();
}

?>