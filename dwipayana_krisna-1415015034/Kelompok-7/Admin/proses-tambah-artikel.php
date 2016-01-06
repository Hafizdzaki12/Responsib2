<?php 
session_start();
include '../Connections/koneksi.php';

if (!isset($_SESSION['login'])) {
	echo "anda belum login, silahkan login dulu";
	header("Refresh:2;url=../login.php");
}elseif (isset($_SESSION['login']) && ($_SESSION['level'] == "user")) {
	echo "hanya Admin yang boleh MengAkses Halaman Ini!";
	header("Refresh:2;url=../index.php");
}
elseif (isset($_SESSION['login']) && ($_SESSION['level'] == "admin")) {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];
    
    $query_artikel = mysql_query("INSERT INTO artikel VALUES ('','$judul',NOW(),'$isi')");
    echo "Artikel Telah Ditambahkan! Halaman Akan Dialihkan Dalam 3 Detik!";
    header("Refresh:3; artikel.php");
}
?>
