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
 ?>
 
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_koneksi, $koneksi);
$query_anggota = "SELECT * FROM anggota";
$anggota = mysql_query($query_anggota, $koneksi) or die(mysql_error());
$row_anggota = mysql_fetch_assoc($anggota);
$totalRows_anggota = mysql_num_rows($anggota);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border="1">
  <tr>
    <td width="77">id</td>
    <td width="77">username</td>
    <td width="77">level</td>
    <td width="98">nama</td>
    <td width="105">alamat</td>
    <td width="93">kota</td>
    <td width="97">email</td>
    <td width="110">telepon</td>
    <td width="84"> <div align="center">Aksi</div></td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_anggota['id']; ?></td>
      <td><?php echo $row_anggota['username']; ?></td>
      <td><?php echo $row_anggota['level']; ?></td>
      <td><?php echo $row_anggota['nama_lengkap']; ?></td>
      <td><?php echo $row_anggota['alamat']; ?></td>
      <td><?php echo $row_anggota['kota']; ?></td>
      <td><?php echo $row_anggota['email']; ?></td>
      <td><?php echo $row_anggota['telepon']; ?></td>
      <td><a href="edit_anggota.php?id=<?php echo $row_anggota['id']; ?>">Edit</a> | <a href="delete_anggota.php?id=<?php echo $row_anggota['id']; ?>">Delete</a></td>
    </tr>
    <?php } while ($row_anggota = mysql_fetch_assoc($anggota)); ?>
</table>
</body>
</html>
<?php
}
?>
