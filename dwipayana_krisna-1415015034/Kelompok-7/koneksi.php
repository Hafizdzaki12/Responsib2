<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_koneksi = "localhost";
$database_koneksi = "komunitas";
$username_koneksi = "root";
$password_koneksi = "";
$koneksi = mysql_connect($hostname_koneksi, $username_koneksi, $password_koneksi) or trigger_error(mysql_error(),E_USER_ERROR); 
$database = mysql_select_db($database_koneksi);
?>
