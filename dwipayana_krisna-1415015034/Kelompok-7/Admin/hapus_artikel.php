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
	
  $id = $_GET['id'];
    $hapus = mysql_query("DELETE FROM artikel WHERE id_artikel = $id");
    $hapus_komentar = mysql_query("DELETE FROM comment WHERE article_id = $id");
    echo "Artikel Telah Di-Hapus! Halaman Akan Dialihkan Dalam 3 Detik!";
    header("Refresh:3; artikel.php");
}
?>
