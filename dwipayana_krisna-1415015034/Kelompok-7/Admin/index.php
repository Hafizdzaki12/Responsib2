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

<!DOCTYPE php>
<php>
<head>
	<meta charset="UTF-8">
	<title>Resident Evil</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style1 {
	color: #FF0000
}
.style2 {color: #0066FF}
body {
	background-color: #000000;
}
-->
    </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	<div id="header">
		<div>
			<ul id="navigation">
				<li class="active">
					<a href="anggota.php" class="style1"><span class="style1">Daftar User</span></a></li>
				<li>
					<a href="artikel.php" class="style1"><span class="style1">Artikel</span></a></li>
                <li>
					<a href="../review.php" class="style1"><span class="style1">Review</span></a></li>
				<li>
					<a href="../tnt.php"><span class="style1">Tips n' Tricks</span></a></li>
				<li>
					<a href="../download.php"><span class="style1">Download</span></a></li>
                <li>
                	<a href="../logout.php"><span class="style1"><?php echo $_SESSION['fullname'] ?>  Logout</span></a>				</li>
			</ul>
	  </div>
  </div>
	<div id="contents">
		<div class="clearfix">

			<div><br>
		  <br>
				<h1 class="style1"><img src="../images/ResidentEvilSeries.jpg" width="1024" height="652"></h1>
              <span class="style1">Apa itu Resident Evil ?<br>
			  </span>
          <p align="justify" class="style1">
					Resident Evil adalah game survival horror yang dibuat oleh Capcom. 
					Diluncurkan untuk pertama kali dalam platform PlayStation pada tahun 1996 dan setahun kemudian menyusul versi untuk Sega Saturn. 
					Game ini merupakan game survival horror yang sangat terkenal dan mampu mencetak kesuksesan yang beruntun.				</p>
		  </div>
	  </div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="style2" id="connect">			</div>
			<p align="center" class="style2">
				© 2023 Zerotype. All Rights Reserved.		</p>
	  </div>
  </div>
</body>
</php>

<?php 
}
?>
