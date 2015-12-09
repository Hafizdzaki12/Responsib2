<?php
session_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != true) {
	echo "Anda tidak memiliki hak akses untuk halaman ini. Silakan <a href = 'login.php'>login</a> terlebih dahulu.";
}
else {
	echo "Ini halaman Admin. Informasi/halaman sensitif diletakkan di sini. <br><a href = 'logout.php'>Logout</a>";
}
?>
