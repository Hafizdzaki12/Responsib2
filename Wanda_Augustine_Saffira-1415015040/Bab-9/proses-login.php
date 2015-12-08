<?php
session_start();

if($_POST['username'] == 'Wanda' && $_POST['password'] == '12345678') {
	$_SESSION['login'] = true;
	$_SESSION['username'] = $_POST['username'];
	echo "Login berhasil. Klik <a href = 'admin.php'>Halaman Admin</a> untuk meelihat data sensitif atau <a href = 'logout.php'>logout</a> untuk keluar.";
}
else {
	echo "Kombinasi username dan password salah. Silakan <a href = 'login.php'>login</a> kembali.";
}
?>
