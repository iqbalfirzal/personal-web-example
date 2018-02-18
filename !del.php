<title>Menghapus...</title>
<?php
	session_start();
	if(!$_SESSION['ownermasuk'])
	{
		header("location:http://xvideos.com");
	}else{
	include "int/db.php";
	}
	if($_GET['loc']=="ft"){
		$dir = "gallery/images/";
		$url= "kelolafoto";
	}else{
		$dir = "files/";
		$url= "kelolafile";
	}
	$file_to_delete = $_GET['del'];
	if (is_file($dir.$file_to_delete)){
    unlink($dir.$file_to_delete);
	echo 	"<script language='JavaScript'>
				alert('File Berhasil Dihapus')
				window.location = 'ownerpage/index.php?owner=$url';
			</script>";
	}else {
	echo 	"<script language='JavaScript'>
				alert('File Gagal Dihapus')
				window.location = 'ownerpage/index.php?owner=$url';
			</script>";
	}	
?>