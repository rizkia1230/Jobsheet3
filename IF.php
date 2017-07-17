<html><head><title>Statement IF</title></head>
<body>
<?php echo"<form action=\"$php_selt\" method=\"post\">";
$nilai=$_POST['nilail'];
echo"Berapa Nilai PHPmu? :
<input name=\"nilail\" value=\"$nilail\" size=\"3\" type=\"text\" value=\
<input name=\"cek\" type=\"submit\" value=\"Cek\"> </form>";
if($_POST['cek']) //perintah untuk menguji penekanan tombol cek
{ echo"<br><h1>";
	if($nilail=="")
		{ echo"Anda Belum Memasukan Nilai..!"; }
	elseif(!is_numeric($nilail)) //jikai nilail tidak bertype numerik
		{ echo" Ini Bukan Nilai Angka"; }
	else
		{
			if($nilai<=30)
				{ echo"Anda mendapat nilai <b> E </b>"; }
			elseif($nilai<=50)
				{ echo"Anda mendapat nilai <b> D </b>"; }
			elseif($nilai<=70)
				{ echo"Anda mendapat nilai <b> C </b>"; }
			elseif($nilai<=80)
				{ echo"Anda mendapat nilai <b> B </b>"; }
			elseif($nilai<=85)
				{ echo"Anda mendapat nilai <b> AB </b>"; }
			else
				{ echo"Anda mendapat nilai <b> A </b>"; }
		}
	echo"</h1>";
}
?>
</body>
</html>