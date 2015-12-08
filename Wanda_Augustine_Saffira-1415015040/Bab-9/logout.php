<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['username']);

echo "Sukses logout. Silakan <a href = 'login.php'>login</a> untuk masuk ke halaman Admin.";
?>
