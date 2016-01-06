<?php
	session_start();
	
	include("koneksi.php");
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$cek 	= $mysqli->query("select * from user where username='$username' and password='$password'");
	$data	= $cek->fetch_array();
	$jumlah = $cek->num_rows;
	
	if($jumlah>0){
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		
		echo"Login berhasil!";
		echo"<meta http-equiv='refresh' content='1; url=index.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br><b><a href='login.php'>ULANGI</a></b></center>";
	}
?>
