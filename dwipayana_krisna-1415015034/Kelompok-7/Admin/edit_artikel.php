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
    $query_artikel = "SELECT * FROM artikel WHERE id_artikel = '$id'";
    $artikel_a = mysql_query($query_artikel);
    $artikel = mysql_fetch_array($artikel_a);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="proses-edit-artikel.php?id=<?php echo $artikel['id_artikel'] ?>">
  <table align="center">    
      <tr valign="baseline">
        <td nowrap align="right">Judul : </td>
        <td><input type="text" name="judul" size="32" value="<?php echo $artikel['judul']?>"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Isi Artikel :</td>
        <td>
        <textarea name="isi">
          <?php echo $artikel['isi_artikel']?>
        </textarea>        
      </tr>      
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input type="submit" value="Ubah Artikel"></td>
      </tr>
  </table>  
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
  }
?>
