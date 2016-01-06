<?php 
session_start();
include 'Connections/koneksi.php';
session_destroy();

header("Refresh:2;url=index.php");
?>
