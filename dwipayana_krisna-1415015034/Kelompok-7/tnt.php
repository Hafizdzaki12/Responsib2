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
	<title>News - Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style1 {color: #FF0000}
body {
	background-color: #000000;
}
.style2 {color: #00FFFF}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	<div id="header">
		<div>
<ul id="navigation">
				<li class="active">
					<a href="index.php"><span class="style1">Home</span></a>				</li>
				<li>
				  <a href="review.php"><span class="style1">Review</span></a>			</li>
<li>
					<a href="tnt.php"><span class="style1">Tips 'n Tricks</span></a>
				</li>
				<li>
					<a href="download.php"><span class="style1">Download</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="main">
			<h1 class="style1">Tips 'n Tricks</h1>
		 	<div class="3u" style="color : red;">		 		
				<section>
					<?php
						$tampil = mysql_query("SELECT * FROM artikel WHERE NOT id_artikel = 0");
						$data = mysql_fetch_array($tampil);		
						$batasan = 700;						
						$i = 1;
						while($data = mysql_fetch_array($tampil)){
					?>						
						<header>
							<h2 style="color: red;"><?php echo $data['judul']; ?></h2>
						</header>
							<p>
								<?php
									$isi_artikel = $data['isi_artikel'];
									$post = substr($isi_artikel, 0, $batasan);
									echo $post;
									echo "...";
								?>								
								<span><a href="post.php?id=<?php echo $data['id_artikel']?>" class="more">Read More</a></span>
							</p>	
					<?php
						}
					?>
				</section>				
			</div>
	  </div>
		<div class="sidebar">
	  <ul class="posts">
				<li></li>
				<li>
					<h4 class="title"><img src="images/re6.jpg" width="400" height="500"></h4>
				</li>
			</ul>
	  </div>
</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>			</div>
			<p align="center" class="style2">
				© 2023 Zerotype. All Rights Reserved.</p>
  </div>
</div>
</body>
</html>
<?php
	}
?>
