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
    
    $query_artikel = "SELECT * FROM artikel";
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
    <table border="1">
      <tr align="center">
        <td width="77">id_artikel</td>
        <td width="77">Judul Artikel</td>
        <td width="77">Tanggal</td>        
        <td>Isi Artikel</td>        
        <td width="84"> <div align="center">
          <a href="tambah-artikel.php">Tambah Artikel</a></div></td>
      </tr>
      <?php do { ?>
        <tr align="center">
          <td><?php echo $artikel['id_artikel']; ?></td>          
          <td><?php echo $artikel['judul']; ?></td>
          <td><?php echo $artikel['tanggal']; ?></td>
          <td><?php echo $artikel['isi_artikel']; ?></td>          
          <td><a href="edit-artikel.php?id=<?php echo $artikel['id_artikel'] ?>">Edit</a> | <a href="hapus-artikel.php?id=<?php echo $artikel['id_artikel'] ?>">Delete</a></td>
        </tr>
        <?php } while ($artikel = mysql_fetch_array($artikel_a)); ?>
    </table>
    </body>
    </html>
<?php
}
?>
