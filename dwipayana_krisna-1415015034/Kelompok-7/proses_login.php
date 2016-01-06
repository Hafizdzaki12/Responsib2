<?php
session_start();
include 'Connections/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
// query untuk mendapatkan record dari username
$query = mysql_query("SELECT * FROM anggota WHERE username ='$username' AND password ='$password' ");
$data = mysql_fetch_array($query);
$jumlah = mysql_num_rows($query);
// cek kesesuaian password
if (!empty($jumlah))
{
echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['login'] = true;
	$_SESSION['level'] = $data['level'];
    $_SESSION['fullname'] = $data['nama_lengkap'];
    $_SESSION['email'] = $data['email'];
	
	if ($_SESSION['level'] == "admin" ) {
    
    header("Refresh:2;url=admin/index.php");
	}
	elseif ($_SESSION['level'] =="user") {
	
	header("Refresh:2;url=index.php");
	}
die();
}
else 
{

header("Refresh:2;url=index.php");
}	
?>
