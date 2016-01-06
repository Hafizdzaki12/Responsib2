<?php
	session_start();
	include 'Connections/koneksi.php';
	
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];

	$sql = mysql_query("INSERT INTO comment VALUES ('','$id','$nama','$email','$komentar',NOW())");
	
		echo "<p align='center'><font color='red'>Komentar Anda Telah Ditambahkan Kedalam Artikel!<br>Halaman akan Di-alihkan dalam waktu 5 detik</span></p>";
		header("Refresh:5;post.php?id=$id");	
?>
