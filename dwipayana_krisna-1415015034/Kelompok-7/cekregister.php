<?php
	session_start();
	
	include("koneksi.php");
	
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$cek 	= $mysqli->query("insert into user values ('','$nama','$username','$password','user')");
	
	echo "register berhasil";
	echo"<meta http-equiv='refresh' content='1; url=login.php'>";
?>
