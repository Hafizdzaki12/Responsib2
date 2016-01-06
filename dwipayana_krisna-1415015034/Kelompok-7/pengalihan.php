<?php 
	session_start();
	include 'Connections/koneksi.php';

	if (!isset($_SESSION['login'])) {
?>

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
    </div>
	<div id="contents">
		<div class="clearfix">

			<div><br>
		      <span class="style1"><img src="images/ResidentEvilSeries.jpg" alt="" width="500" height="300" align="right"></span><br>
				<h1 class="style1">Belum Login, Ya!?</h1>
              <span class="style1"><br>
			  </span>
	            <p align="justify" class="style1">
                	<?php
						header("Refresh:5; index.php");
						echo "Anda Belum Login, Silahkan Login terlebih dahulu agar dapat mengakses halaman ini!!<br>";
						echo "Halaman Akan dialihkan dalam 5 detik!!";
					?>

                </p>	
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
<?php
	}
?>
