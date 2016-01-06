<?php
	session_start();
	include 'Connections/koneksi.php';
	
	$id = $_GET['id'];
	$sql = mysql_query("SELECT * FROM artikel WHERE id_artikel = $id");
	$data = mysql_fetch_array($sql);
	if (!$data['id_artikel']){
		echo "<p align='center'><font color='red'>Artikel Tidak Ada!<br>Halaman akan Di-alihkan dalam waktu 5 detik</span></p>";
		header("Refresh:5;tnt.php");
	}
?>

<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>News title - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #FFFFFF}
body {
	background-color: #000000;
}
.style3 {color: #00FFFF}
.style4 {color: #000000}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	<div id="header">
		<div>
			<div class="logo"></div>
	  <ul id="navigation">
				<li>
					<a href="index.php"class="style1"><span class="style1">Home</span></a>
				</li>
				<li>
					<a href="review.php" class="style1"><span class="style1">Review</span></a>				</li>
				<li class="active">
					<a href="tnt.php"><span class="style1">Tips 'n Tricks</span></a>				</li>
				<li>
					<a href="download.php"><span class="style1">Download</span></a></li>
				<li></li>
		  </ul>
		</div>
	</div>	
	<div id="contents">
		<div class="post">
		  <h1 align="center" class="style2">RESIDENT EVIL 6</h1>
			<h1 align="center" class="style2"><?php echo $data['judul']?></h1>
			<div align="justify">
			<span class="style1"><br>			
		    	<span class="style2" style="color: red;"><br>
		    		<?php
		    			echo "&nbsp;&nbsp;&nbsp;&nbsp;".$data['isi_artikel'];
		    		?>
		    	</span>
			</span>
			</div>			
	        <div align="right">
	          <p><span><a href="tnt.php" class="more">Back to Tips 'n Tricks</a></span> </p>
	          <p align="right">&nbsp;</p>
	          <h3>Form komentar:</h3>

			<form method="post" action="tambah-komentar.php?id=<?php echo $data['id_artikel']?>">
				<p align="left">Nama Anda <span class="style4">_</span>*):
				 	<input type="text" name="nama" value="<?php echo $_SESSION['fullname']?>" readonly>
				</p>
				 <p align="left">
				   <label for="email">Alamat email *):</label>
				   <input type="text" name="email" value="<?php echo $_SESSION['email'] ?>" readonly>
				 </p>
				 <p align="left">
				 <label for="komentar">Komentar<span class="style4">____</span>*):</label>
				 <textarea name="komentar" id="komentar" cols="45" rows="5" required></textarea>
				 </p>
				 <p align="left">
				 <input type="submit" name="submit" id="submit" value="Submit">
				 <input type="reset" name="submit2" id="submit2" value="Reset">
				 </p>
			</form>

	        </div>

			<div class="komentar" style="color : white;">
				<fieldset>
					<legend>Kumpulan Komentar</legend>
					<?php
						$id = $_GET['id'];
						$komentar = mysql_query("SELECT * FROM comment WHERE article_id = $id");
						while($datakomentar = mysql_fetch_array($komentar)){
					?>
					<header>
						<h2 style="color: red;"><?php echo $datakomentar['name']; ?></h2>
						<p><?php echo $datakomentar['date']; ?></p>
					</header>
						<p>
							<fieldset>
								<br>
								<p style="color : white;">
									<?php echo $datakomentar['comment']; ?>
								</p>
								<br>
							</fieldset>
						</p>
					<?php
						}
					?>
				</fieldset>
			</div>
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
