<?php
include 'Connections/koneksi.php';
$username= $_POST['username'];
$password= $_POST['password'];
$nama_lengkap= $_POST['nama_lengkap'];
$alamat= $_POST['alamat'];
$kota= $_POST['kota'];
$email= $_POST['email'];
$telepon= $_POST['telepon'];

$query = mysql_query("INSERT INTO anggota (username, password, level, nama_lengkap, alamat, kota, email, telepon) VALUES ('$username', '$password', 'user', '$nama_lengkap', '$alamat', '$kota', '$email', '$telepon')") or die(mysql_error());

echo "input data berhasil";
header("Refresh:2;url=login.php");
?>
