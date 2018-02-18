<?php
error_reporting(0);
$adm=$_POST['admin'];
$pass=$_POST['kunci'];
include "../int/db.php";
$cek_terdaftar=mysql_query("SELECT * FROM owner WHERE username='$adm' && password='$pass'");
$jumlah=mysql_num_rows($cek_terdaftar);
if($jumlah==1)
{
	session_start();
	$_SESSION['ownermasuk']=true;
	$_SESSION['ownername']=$adm;
	header("location:index.php?owner=welcome");
}else{
	echo 	"<script language='JavaScript'>
				alert('Nama atau kata sandi salah')
				window.location = 'login';
			</script>";
}
?>