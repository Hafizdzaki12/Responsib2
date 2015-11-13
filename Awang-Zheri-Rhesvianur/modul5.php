<?php 
echo "<fieldset>";
echo "<legend>1.Ini untuk yang di atas html</legend>";
echo "Hello <br>";
echo "<hr>";
echo "</fieldset>";
?>
 <html>
 <head>
 	<title>Tukang PHP</title>
 </head>
 <body>
<?php 
echo "<fieldset>";
echo "<legend>2.Ini untuk yang didalam html</legend>";
echo "<br>Hello";
echo "<hr>";
echo "</fieldset>";
//Komen 1
/* komen berlebih
Komen berlebih 2
Komen berlebih 3
*/
// masukan kode 
echo "<fieldset>";
echo "<legend>3.Komentar dan deklarasi variabel 1</legend>";
$a = 3 /* + 15 */ +5;
echo "<br> <br>";
echo $a;
echo "</fieldset>";
$warna = "biru";
echo "<fieldset>";
echo "<legend>4.PHP Case Sensitive</legend>";
echo "Mobil ku ".$warna."<br>";
echo "Rumah ku ".$warna."<br>";
echo "Kapal ku ".$warna."<br>";
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>5.Deklarasi Variabel 2 dan Output Variabel 1 2 dan 3(Aritmatika)</legend>";
$text = "Hello World!";
$text2 = "World!";
$text3 = "kucing!";
$p = 2;
$o = 100.4;
echo "I Say $text! Untuk variabel di dalam echo <br> <hr>";
echo "I Say ".$text."! Untuk variabel diluar echo<br><hr>";
echo "Output dari p ".$p."<br><hr>";
echo "Output dari o " .$o."<br><hr>";
echo "Hasil dari pertambahan o dan p ";
echo $p+$o;
echo "<br><hr>";
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>6.Menghitung jumlah string </legend>";
echo "$text<br>";
echo "Jumlah ";
echo strlen($text);
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>7.Membalikan String </legend>";
echo "$text <br>";
echo strrev($text);
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>8.Pencarian dalam string(posisi)</legend>";
echo "Pada huruf setelah urutan ";
echo strpos($text, $text2);
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>9.Mengganti Text</legend>";
echo "$text Sebelum diganti <br>";
echo str_replace($text2, $text3, $text);
echo " Sesudah diganti";
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>10.Fungsi Dasar</legend>";
function hei() {
	echo "Hei cing!";
}
hei();
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>11.Fungsi Dasar Dengan Argumen</legend>";
function namaKeluarga($knama) {
	echo $knama." Dan Semua Keluarga.";
	echo "<br>";
}
namaKeluarga ("Mei");
namaKeluarga ("Sin");
namaKeluarga ("Kei");
namaKeluarga ("Yo");
namaKeluarga ("Rin");
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>12.Fungsi Dengan lebih dari satu Argumen </legend>";
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hage", "1975");
familyName("Steal", "1978");
familyName("Kai", "1983");
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>13.Fungsi dengan nilai default pada argumen</legend>";
function aturTinggi ($min = 50) {
	echo "Tinggi =  $min <br>";
}
aturTinggi (356);
aturTinggi (); //tetatur default dengan diatas
aturTinggi (101);
aturTinggi (80);
echo "</fieldset>";
echo "<fieldset>";
echo "<legend>14.Fungsi yang mengembalikan nilai</legend>";
function tambah($y, $k) {
	$m = $y + $k;
	return $m;
}
echo "5 + 10 = ".tambah(5,10)."<br>";
echo "24 + 8 = ".tambah(24,8)."<br>";
echo "2 + 9 = ".tambah(2,9)."<br>";
 ?>
 </body>
 </html>
