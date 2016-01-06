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
<title>Resident Evil</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FF0000}
body {
	background-color: #000000;
}
.style2 {color: #00FFFF}
.style11 {
	font-size: 18px
}
.style12 {color: #FF0000; font-size: 36px; }
.style13 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style15 {
	font-weight: bold;
	font-size: 36px;
	color: #FFFFFF;
}
.style16 {font-size: 24px}
.style18 {font-family: "Courier New", Courier, monospace; font-weight: bold; font-size: 36px; color: #FFFFFF; }
.style19 {font-size: 24px; color: #FFFFFF; }
.style21 {color: #FFFFFF}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body onLoad="MM_CheckFlashVersion('7,0,0,0','Content on this page requires a newer version of Adobe Flash Player. Do you want to download it now?');">
	<div id="header">
		<div>
			<ul id="navigation">
				<li class="active">
					<a href="index.php"class="style1"><span class="style1">Home</span></a>
				</li>
				<li>
					<a href="review.php" class="style1"><span class="style1">Review</span></a>				</li>
<li>
					<a href="tnt.php"class="style1"><span class="style1">Tips 'n Tricks</span></a>
				</li>
				<li>
					<a href="download.php"class="style1"><span class="style1">Download</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="features style1">
			<h1 align="center" class="style12"><span class="style21">Resident</span> Evil 6</h1>
		  <div><img src="images/Resident-Evil-World-Frikarte.jpg" width="760" height="540">
		    <p align="justify" class="style1">Gamer mana yang tidak mengenal nama besar Resident Evil? Kemunculan pertamanya di Playstation di masa lalu memang menjadi fenomena tersendiri. Menggabungkan sisi action, horror, dan mekanisme gameplay yang unik, Resident Evil tidak hanya menjadi legenda, tetapi definsi legit yang menjadi dasar bagi kelahiran genre survival-horror itu sendiri. Namun, Capcom sendiri tampaknya memiliki agenda tertentu dengan franchise raksasanya yang satu ini. Seiring dengan kelahiran setiap seri yang baru, Capcom mulai menghapuskan elemen horrornya sedikit demi sedikit dan lebih memilih untuk menggandakan elemen action di dalamnya, hingga pada batas ia tidak lagi menebarkan atmosfer ketakutan yang cukup intens. Lantas bagaimana dengan seri terbarunya yang sangat diantisipasi – Resident Evil 6? Setelah penantian yang cukup lama, Capcom akhirnya merilis game ini secara resmi ke pasaran.</p>
			  <h2 class="style13">APA SAJA YANG ADA DI RE_6 INI ?</h2>
		    <p align="justify" class="style1">Visualisasi selalu menjadi kekuatan dari Resident Evil dan secara konsisten dipersiapkan oleh Capcom untuk seri terbarunya. Resident Evil 6 datang dengan kualitas grafis yang tidak mengecewakan, dengan detail karakter dan setting yang jauh lebih kuat dan jelas. Namun salah satu perubahan yang cukup dirasa kentara justru ada pada sisi gameplay yang ada. Anda akan menemukan kesan game action yang kini lebih kuat dengan penambahan beragam fitur dan gerakan yang dapat dilakukan oleh setiap karakter. Anda kini dapat melakukan cover, melakukan diving , hingga melakukan melee attack tanpa pisau sekalipun, tidak seperti seri-seri sebelumnya. Namun Anda akan merasakan tingkat kesulitan yang cukup menantang lewat jumlah musuh yang kian sulit untuk ditundukkan. Sistem skill juga disuntikkan untuk menggantikan sistem shop yang populer di Resident Evil 4 dan 5. Seperti halnya game RPG, skill yang Anda pilih akan memberikan keuntungan tertentu pada sang karakter yang Anda gunakan.</p>
			  <p align="justify" class="style1">Mengapa kami menyebut Resident Evil 6 sebagai seri Resident Evil yang paling masif? Karena ia memang diposisikan seperti ini. Bagaimana tidak? Berbeda dengan seri-seri sebelumnya yang hanya menjadikan satu karakter sebagai fokus cerita, Anda akan dapat memainkan setidaknya tiga karakter lewat tiga skenario yang berbeda di seri terbaru ini. Anda dapat berperan sebagai Leon, Chris, maupun Jack dengan jalur cerita dan fokus gameplay yang berbeda satu sama lain. Anda akan menemukan kesan klasik yang lebih kentara di skenario Leon (seperti yang kami lakukan saat ini), sedangkan skenario Chris dan Jack akan membawa Anda pada dunia Resident Evil yang baru. Setting yang lebih luas dan karakter yang lebih banyak menciptakan ilusi sebuah seri Resident Evil yang memang jauh lebih besar, jauh lebih masif.</p>
			  <p align="justify" class="style1">Apakah seri ini tampil lebih baik? Terlalu awal untuk menarik kesimpulan saat ini. Ketika artikel ini ditulis, kami sendiri masih berjuang untuk menyelesaikan skenario milik Leon dan sedikit menjajal cerita dari Chris dan Jack untuk mendapatkan gambaran perbedaan yang ada. Satu yang pasti, ada sesuatu yang terasa kosong di seri terbaru ini, sesuatu yang membuat pengalamannya tidak cukup kuat untuk membuat Anda jatuh cinta begitu saja. Satu yang pasti, Anda mungkin akan merasa kewalahan dengan kembalinya tingkat kesulitan yang akan memaksa Anda untuk melewati serangkaian proses trial dan error. Peluru begitu terbatas, begitu juga herb. Untungnya, Anda dapat mengandalkan melee sebagai pondasi serangan yang paling utama.</p>
			  <p align="justify" class="style1">Sembari berusaha mencapai progress yang lebih baik untuknya, serta mencari waktu yang lebih proporssional untuk merangkum petualangan yang lebih masif ini, izinkan kami menyediakan screenshot-screenshot di bawah ini untuk membantu Anda mendapatkan sedikit gambaran tentang Resident Evil 6. <em>It’s gonna be one hell of a journey…</em></p>
			  <h2 align="center">&nbsp;</h2>
		  </div>
<div>
  <h2 align="center" class="style18">TRAILER RESIDENT EVIL 6</h2>
  <p align="center">
    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0','width','522','height','401','id','FLVPlayer','src','FLVPlayer_Progressive','flashvars','&MM_ComponentVersion=1&skinName=Halo_Skin_3&streamName=images/re6&autoPlay=false&autoRewind=false','quality','high','scale','noscale','name','FLVPlayer','salign','lt','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','FLVPlayer_Progressive' ); //end AC code
    </script>
    <noscript>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="522" height="401" id="FLVPlayer">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="salign" value="lt" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Halo_Skin_3&streamName=images/re6&autoPlay=false&autoRewind=false" />
      <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Halo_Skin_3&streamName=images/re6&autoPlay=false&autoRewind=false" quality="high" scale="noscale" width="522" height="401" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" />      
</object>
    </noscript>
</p>
  <p align="center">&nbsp;</p>
  <p align="center" class="style15">KARAKTER</p>
  <p align="left"><span class="style16">CHRIS REIDFIELD</span><img src="images/re5.jpg" width="800" height="800"></p>
  <div>
    <div align="justify" class="style18"><strong>Biografi</strong></div>
  </div>
  <div class="style11">
    <div align="justify" class="style19"><strong>Awal cerita / karir</strong></div>
  </div>
  <div class="style11">
    <div align="justify"><br>
      </div>
  </div>
  <div class="style11">
    <div align="justify">Chris adalah kakak tertua dari anggota TerraSave, Claire Redfield. Saat berumur tujuh belas tahun, Chris bergabung dengan Angkatan Udara, bekerja sebagai pilot dan penembak jitu sekaligus. Selain mahir menerbangkan pesawat tempur, dia juga mampu menggunakan senjata dengan baik dan dialtih dengan intensif dalam pertarungan jarak dekat, dan ikut di berbagai misi ke luar negeri. Dia digambarkan oleh atasannya sebagai orang yang tanpa kompromi, memiliki dedikasi yang tinggi, dan cepat beradaptasi di lingkungan yang baru. Akan tetapi, Chris sering mengalami konflik dengan atasannya. Tidak mampu menyelesaikan masalah antara keduanya, akhirnya dia memilih untuk berhenti secara tidak hormat. Walaupun dalam laporan disebutkan ia pension pada umur 23 – 24.</div>
  </div>
  <div class="style11">
    <div align="justify">Setelah meninggalkan angkatan udara, Chris memulai pengembaraannya di amerika dan pada akhirnya ia tiba di Raccoon city, dimana teman lamanya, Barry Burton, merekomendasikan ia untuk masuk ke kesatuan polisi S.T.A.R.S – sebuah unit yang kebanyakan diisi oleh mantan anggota tentara. Dan dibentuk untuk menekan jumlah terorisme yang terjadi kota tersebut. Setelah STARS mengontaknya, mungkin setelah mendapat rekomendasi dari Barry. Akhirnya Chris memutuskan untuk bergabung sebagai anggota STARS dan bersama Barry ia direkrut menjadi anggota Tim Alpha dengan Albert Wesker sebagai kaptennya</div>
  </div>
  <div class="style11">
    <div align="justify"><br>
      </div>
  </div>
  <div class="style11">
    <div align="justify">Dia bekerja sebagai penunjuk jalan juga sebagai co-pilot tim alpha, dan ia ternyata juga memiliki ketepatan menembak yang baik. Disitu ia bertemu dengan partner sekaligus teman terdekatnya Jill Valentine dan tak lama keduanya akhirnya memiliki ikatan yang kuat.</div>
  </div>
  <div class="style11">
    <div align="justify"><span class="style16"><br>
      </span></div>
  </div>
  <div class="style11">
    <div align="justify"><span class="style19"><strong>Insiden di sebuah mansion</strong></span></div>
  </div>
  <div class="style11">
    <div align="justify"><br>
      </div>
  </div>
  <div class="style11">
    <div align="justify">Pada 24 Juli 1998, Tim Alpha dikirm ke pegunungan Arklay di pinggiran Raccoon City untuk menginvestigasi lenyapnya seluruh anggota Tim Bravo. Saat berjalan melewati hutan, mereka menemukan sisa – sisa dari helicopter tim bravo, bersamaan dengan potongan tubuh pilot mereka, Kevin dooley. Tiba – tiba saat sedang menginvestigasi di sekitar hutan yang sunyi, anggota Tim Alpha Joseph Frost diserang oleh beberapa anjing liar dan memakannya hidup – hidup. Jill yang menyaksikan kejadian itu mulai menembaki anjing tersebut, tetapi ia terkejut saat senjatanya kehabisan peluru. Salah satu anjing menyadari kehadiran Jill dan berlari ke arahnya. Sebelum sempat diserang Chris menembak anjing tersebut dan memerintahkan Jill untuk pergi dari tempat itu.</div>
  </div>
  <div class="style11">
    <div align="justify">Dengan Tim Alpha yang dalam kewaspadaan yang tinggi, mereka berlari melewati hutan menuju ke tempat pendaratan, hanya untuk menemukan pilot mereka, Brad Vicker terbang pergi dari tempat itu. Untuk menunda waktu, Chris berbalik dan menjadikan dirinya sebagai tameng untuk menghadapi anjing tersebut. Akan tetapi, Wesker berhasil menembak anjing itu dan memerintahkan Chris dan Jill mengikutinya. Mereka melihat sebuah mansion besar dari kejauhan dan mereka berempat berlari ke tempat itu. Setelah sebelumnya sempat melawan anjing – anjing itu akhirnya mereka berhasil sampai di mansion tersebut untuk berlindung.</div>
  </div>
  <div class="style11">
    <div align="justify"><br>
      </div>
  </div>
  <div class="style11">
    <div align="justify">Sepanjang malam, Chris mengelilingi tempat tersebut mencari tanda kehidupan, melawan beberapa makhluk, dan akhirnya bertemu dengan anggota Tim Bravo yang masih selamat, Rebecca Chambers dan Richard Aiken. Lalu Chris berlari ke Wesker yang mengaku bahwa dirinya terpisah dari Jill.</div>
  </div>
  <div class="style11">
    <div align="justify">Setelah berjalan melewati gua dibawah mansion itu, Chris menemukan anggota yang terluka Enrico Marini, kapten dari Tim Bravo yang menginformasikan Chris bahwa ada seorang penghianat di Tim Alpha, sebelum Enrico berbicara lebih banyak ia ditembak oleh orang misterius. Chris lalu menemukan sebuah laboratorium bawah tanah yang digunakan untuk memproduksi B.O.W (senjata bio organik) dan juga menyadari bahwa penghianat itu adalah Wesker itu sendiri. Setelah bertemu Wesker, akhirnya ia mengaku bahwa ia sengaja memancing anggota STARS ke mansion untuk bertarung dengan BOW sebagai pengumpulan data untuk penelitian selanjutnya. Wesker menembak Rebecca dan melepaskan monster yang bernama Tyrant. Tapi kemudian Tyrant itu malah berbalik menyerang Wesker dan membuatnya terluka parah. Rebecca masih selamat dari tembakan karena ia menggunakan rompi anti peluru dan ia berlari untuk mengaktifkan mode penghancuran laboratorium tersebut. Dengan diaktifkannya mode itu Chris memfokuskan untuk mencari Jill. Berlari menyusuri laboratorium tersebut, ia menemukan Jill yang terkurung di sebuah penjara. Setelah menyelamatkannya, keduanya berlari ke atap untuk menunggu kedatangan Brad. Tak lama Rebecca bergabung dengan mereka tapi sebelum sempat Brad mendaratkan helikopternya, Tyrant terseebut muncul kembali dan mulai menyerang mereka. Setelah terjadi tembak menembak, Brad melemparkan sebuah peluncur roket, dan menggunakan peluncur roket tersebut untuk menghancurkan tyrant.</div>
  </div>
  <div class="style11">
    <div align="justify">Chris, Jill, dan Rebecca naik di helicopter itu dan menyelamatkan diri dari mansion. Barry juga berhasil menyelamatkan diri, entah itu bersama dengan helicopter ataupun melalui jalan lainnya. Mansion itu kemudian meledak, membuat sisa monster dan bukti meledak bersamanya.</div>
  </div>
  <p align="justify" class="style11">&nbsp;</p>
</div>
	  <p>&nbsp;</p>
	  <p><span class="style16">LEON S. KENNEDY</span></p>
	  <p><img src="images/re4.jpg" width="800" height="800"></p>
	  <div class="style18">Biografi</div>
	  <span class="style19">Racoon City	  </span>
	  <table border="1" cellpadding="0" cellspacing="0">
	    <tbody>
	      <tr>
	        <td><br></td>
          </tr>
        </tbody>
	    </table>
	  <div>
	    <div align="justify">Leon terbakar dengan keinginan yang kuat untuk melindungi dan melayani, dan hidup sebagai kadet adalah sebuah pengalaman yang membuka matanya. Pada umur 21 tahun, Leon ditugaskan untuk bekerja di Departemen Polisi Raccoon City setelah lulus dari akademi polisi. Dia sampai di Raccoon City pada tanggal 29 September 1998, terlambat satu hari dari hari yang seharusnya. Karena sebuah kejadian yang terjadi di Raccoon City, ini merupakan hari pertama dan satu-satunya hari dimana ia menjadi anggota polisi.</div>
	  </div>
	  <div>
	    <div align="justify">Pada 29 September, 1998. Leon sampai di Raccoon City untuk melaksanakan tugasnya di kantor polisi. Tertidur semalam, matahari sudah berada tinggi di atas sejak ia mencapai batas kota melewati jalan tol. Tampak diabaikan saat kota tersebut diblokade oleh militer AS sebelumnya, dia masih belum sadar tentang penyebaran t-Virus.</div>
	  </div>
	  <div>
	    <div align="justify">Sampai di distrik bisnis di pusat kota, Leon menghentikan mobilnya untuk memeriksa tubuh yang terbaring di tanah. Dengan tidak sadar akan terjadinya penyebaran virus, dia sangat terkejut ketika beberapa zombie dan tubuh yang dikiranya sebagai mayat bangkit dan berusaha untuk menyerangnya. Berhasil melarikan diri, Leon bertemu dengan orang lain yang masih selamat yang bernama Claire Redfield, dan ia sedang dalam misi pencarian kakaknya yang hilang, Chris. Bersama – sama, Leon dan Claire memutuskan untuk mengungsi ke dalam markas pusat RPD, tetapi sebelum sampai tempat itu, mereka berdua terpisah saat mobil polisi milik Leon hancur berkeping-keping, keduanya berhasil selamat setelah hampir ditabrak oleh truk yang dikemudikan oleh pengendara yang terinfeksi.</div>
	  </div>
	  <div>
	    <div align="justify">Dalam perjalanannya ke markas RPD, Leon bertemu dengan seseorang lainnya yang bernama Ada Wong, perempuan yang mengaku sedang mencari pacarnya, John Clemens, yang hilang. Dengan singkat mereka berdua membangun sebuah ikatan, bahkan Leon sampai menghalangi sebuah peluru yang ditembakkan kea rah Ada oleh Annette Birkin. Leon dan Ada berhasil menghadapi semua musuh, sampai tak lama kemudian, Ada terluka oleh cakaran dari William Birkin yang bermutasi. Saat itu juga, Leon mengetahui dari Annette Birkin bahwa Ada sesungguhnya adalah seorang mata-mata, dan datng ke tempat itu hanya untuk untuk mencuri sampel G-Virus. Walaupun begitu, Leon masih tak percaya sampai Ada meberitahunya sendiri. Sesaat kemudian, Ada menyelamatkan Leon saat ia terpojok oleh t-00. Ada menembak makhluk tersebut di punggung untuk mengalihkan perhatiannya, dan ia berhasil. Kemudian Ada langsung diserang, digenggam, dan ditahan di atas, yang kemudian dilawan oleh Ada dengan menembakkan beberapa peluru ke wajah monster tersebut, membuat tyrant tersebut jatuh ke kawah. Akan tetapi, Ada terluka parah dalam usaha perlawanannya. Dia lalu memberitahu Leon tentang semuanya. Tak lama kemudian Ada tak sadarkan diri, yang dikira oleh Leon Ada telah mati.</div>
	  </div>
	  <div>
	    <div align="justify">Walaupun begitu, saat mencapai akhir, figure misterius dengan suara dan bentuk tubuh mirip Ada membantu Leon dengan memberikannya sebuah peluncur roket untuk membantunya mengalahkan t-00 yang telah bermutasi. Leon bersatu kembali dengan Claire, dan keduanya bersama seorang anak yang bernama Sherry Birkin berhasil melarikan diri melalui sebuah jalan rahasia dir el dan lari menggunakan kereta, meninggalkan Birkin yang bermutasi untuk hancur dalam mode penghancuran diri sendiri.</div>
	  </div>
	  <div><br>
	    </div>
	  <div class="style19">Anti-Umbrella</div>
	  <div>
	    <div align="justify">Setelah insiden Raccoon City, Claire dan Leon berpencar, Claire melanjutkan pencarian kepada Chris, saat Leon melanjutkan pencariannya terhadap Sherry. Leon dan Sherry segera diserahkan ke militer AS. Sherry dibawa dan ditempatkan di perlindungan saat Leon diinterogasi. Saat itu, Leon tidak pernah menyebut nama Claire maupun Ada, tapi pemerintah merasa tertarik untuk merekrutnya, sejak ia memiliki pengalaman dan keahlian yang pemerintah butuhkan. Leon menerima tawaran tersebut.</div>
	  </div>
	  <div>
	    <div align="justify">Pelatihan atas dirinya sebagai agen pemerintah merubah dirinya dari seorang polisi biasa menjadi agen spesial yang sangat ahli. Dia memiliki kompetensi dalam pengendalian senjata dan pertarungan tanpa senjata, pertarungan dengan pisau secara lebih spesifik.</div>
	  </div>
	  <div>
	    <div align="justify">Pada November 1998, Leon mengirim seorang temannya, detektif Ark Thompson untuk menginvestigasi fasilitas milik Umbrella di Pulau Sheena. Pada bulan berikutnya, Claire pergi ke Eropa untuk melanjutkan pencariannya atas Chris. Claire ditangkap di oleh Umbrella saat ketahuan menyusup ke dalam fasilitas milik Umbrella di Paris. Saat di dalam penjara di Pulau Rockford, Claire mengirim e-mail kepada Leon memintanya untuk menginformasikan Chris tentang keberadaan dirinya agar Chris bisa datang dan menyelamatkannya dari tempat itu. Leon berhasil melacak Chris sendirian, dan memberitahunya tentang situasi yang dihadapi oleh Claire. Dan akhirnya Chris berangkat menuju Pulau Rockford untuk menyelamatkannya.</div>
	  </div>
	  <br>
	  <p>&nbsp;</p>
	  </div>
</div>
<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<div align="center"><a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a> </div>
			</div>
			<p align="center" class="style2">
				© 2023 Zerotype. All Rights Reserved.			</p>
	  </div>
</div>
</body>
</html>
<?php
	}
?>
