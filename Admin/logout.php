<?php 
include '../config.php';
session_start();
session_destroy();

if (isset($_COOKIE['cookie_admin'])) {
    unset($_COOKIE['cookie_admin']);
    setcookie('cookie_admin', '', time() - 3600, '/');
}

header("Location: ".$url_website."/admin/login.php");
die();

?>