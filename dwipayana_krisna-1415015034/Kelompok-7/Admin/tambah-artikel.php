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

<form method="post" name="form1" action="proses-tambah-artikel.php">
  <table align="center">    
      <tr valign="baseline">
        <td nowrap align="right">Judul : </td>
        <td><input type="text" name="judul" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Isi Artikel :</td>
        <td>
        <textarea name="isi" rows="4" cols="100">
        </textarea>        
      </tr>      
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input type="submit" value="Insert record"></td>
      </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
<?php
}
?>
