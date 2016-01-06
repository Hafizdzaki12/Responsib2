<?php 
	session_start();
	include 'Connections/koneksi.php';

	if (!isset($_SESSION['login'])) {
		echo "anda belum login, silahkan login dulu";
		header("location:pengalihan.php");
		}else{
?>

<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #00FF00; }
.style3 {color: #00FFFF}
body {
	background-color: #000000;
}
.style4 {
	color: #00CC33
}
.style5 {
	font-size: 24px
}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	<div id="header">
		<div>
			<div class="logo"></div>
	  <ul id="navigation">
				<li class="active">
					<a href="index.php" class="style1"><span class="style1">Home</span></a>				</li>
<li>
					<a href="review.php"class="style1"><span class="style1">Review</span></a>
				</li>
				<li class="style1">
					<a href="tnt.php" class="style1"><span class="style1">Tips 'n Tricks</span></a>				</li>
				<li>
					<a href="download.php" class="style2"><span class="style1">Download</span></a>				</li>
		  </ul>
		</div>
	</div>
	<div id="contents">
		<div id="about">
			<h1 class="style4">Resident Evil 6</h1>
			<h2 class="style4"><strong><u>System Requirements:</u></strong><br>
			</h2>
	        <table>
	          <tbody>
	            <tr>
	              <th width="125" class="style2">CPU:</th>
	              <td width="380" class="style2">Intel Core 2 Duo 2.4 Ghz or better, AMD Athlon X2 2.8 Ghz or better</td>
                </tr>
              </tbody>
          </table>
	        <table>
	          <tbody>
	            <tr>
	              <th width="125" class="style2">RAM:</th>
	              <td width="380" class="style2">2 GB</td>
                </tr>
              </tbody>
          </table>
	        <table>
	          <tbody>
	            <tr>
	              <th width="125" class="style2">OS:</th>
	              <td width="380" class="style2">Windows Vista/XP, Windows 7, Windows 8</td>
                </tr>
              </tbody>
          </table>
	        <table>
	          <tbody>
	            <tr>
	              <th width="125" class="style2">Video Card:</th>
	              <td width="380" class="style2">NVIDIA GeForce 8800 GTS or better/Radeon HD 3870</td>
                </tr>
              </tbody>
          </table>
	        <table>
	          <tbody>
	            <tr>
	              <th width="125" class="style2">Sound Card:</th>
	              <td width="380" class="style2">Yes</td>
                </tr>
              </tbody>
          </table>
	        <table>
	          <tbody>
	            <tr>
	              <th width="125" class="style2">Free Disk Space:</th>
	              <td width="380" class="style2">16 GB</td>
                </tr>
              </tbody>
          </table>
            <p>&nbsp;</p>
            <p class="style5"><span class="style2">Download klik</span> <span class="style2"><a href="http://paste2.org/yvpF5sMz">here</a></span></p>
	  </div>
</div>
	<div id="footer">
		<div class="clearfix">
			<div class="style3" id="connect">			</div>
			<p align="center" class="style3">
				© 2023 Zerotype. All Rights Reserved.			</p>
	  </div>
</div>
</body>
</html>
<?php
	}
?>
