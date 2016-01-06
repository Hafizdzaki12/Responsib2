<?php
session_start();
      include 'Connections/koneksi.php';

      if(isset($_SESSION['login']) && ($_SESSION['level'] == "user")) {        
        header("Location:index.php");
      }
      elseif (isset($_SESSION['login']) && ($_SESSION['level'] == "admin")) {
      	header("Location:admin/index.php");
      }else{
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Resident Evil</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-image: url(images/box.png);
}
-->
</style></head>
<body>
	<div id="contents">
		<div id="tagline" class="clearfix">
			<h1 align="right">Login</h1>
<div>
				<form  method="POST" action="proses_login.php">
						<label>Username :</label>
						<input type="text" name="username" id="username" placeholder="Username" required>
						<br>
						<label>Password  :</label>
						<input type="password" name="password" id="password" placeholder="Password" required>
						<br>
						<input type="submit" value="Login">
 				</form>
 				<br>
 				
 				<form action="create_anggota.php">
 				<label>Belum punya id ??</label>
 				<input type="submit" value="Register">
				</form>
			</div>
		</div>
</div>
		<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2015 By ---. 
			</p>
		</div>
	</div>
</body>
</html>
<?php
}
?>
