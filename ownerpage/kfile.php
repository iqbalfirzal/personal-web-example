<?php
include "../int/secure.php";
?>
<style type='text/css'>
.table{
	width:100%;
	text-align:center;
}
.table th{
	background-color:#848383;
	color:#FFFFFF;
}
.table tr td{
	border: #dedede solid thin;
}
</style>
<?php
	$umpetke_berkas = array('index.php');
	$umpetke_ext   = array('php, html');
	$dir='../files/';
	$dh=opendir($dir) or die('error');
	$no=1;
	echo"<table class='table'>";
	echo"<tr><th>No.</th><th>Nama File</th><th>Simpan</th><th>Hapus</th></tr>";
	while (false !== ($file = readdir($dh))) {
		if ($file != "." && $file != ".." &&
			!in_array($file, $umpetke_berkas) &&
			!in_array(pathinfo($file, PATHINFO_EXTENSION), $umpetke_ext)) 
		{
			echo"<tr><td>$no</td><td style='text-align:left;'>$file</td><td><a href='../!down?loc=fl&file=$file'><img src='../img/download.png' height='30px'></a></td><td><a href='../!del.php?loc=fl&del=$file'><img src='../img/delete.png' height='30px'></a></td></tr>";
			$no++;
		}
	}
	echo"</table>";
	closedir($dh);
?>