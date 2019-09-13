<?php 
include __DIR__.'/../config.php';
session_start();
session_destroy();

if (isset($_COOKIE['cookie_pengguna'])) {
    unset($_COOKIE['cookie_pengguna']);
    setcookie('cookie_pengguna', '', time() - 3600, '/');
}

header("Location: ".$url_website."/pengguna/login/index.php");
die();

?>