<?php 
include __DIR__.'/../config.php';
session_start();
$isLoggedIn = false;
if (!empty($_SESSION["sesi_pengguna"])) {
    $isLoggedIn = true;
}else if(!empty($_COOKIE["cookie_pengguna"])){
	$_SESSION["sesi_pengguna"] = $_COOKIE["cookie_pengguna"];
	$isLoggedIn = true;
}

if (!$isLoggedIn) {
	header("Location: ".$url_website."/pengguna/login/index.php");
	die();
}

?>