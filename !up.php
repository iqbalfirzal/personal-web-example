<html>
<head>
<title>Mengunggah File...</title>
</head>
<body>
<?php
session_start();
if(!$_SESSION['ownermasuk'])
{
	header("location:http://xvideos.com");
}else{
	include "int/db.php";
}
$uptype = $_POST ['whatup'] ;
if($uptype=='upfoto'){
	$target_path = "gallery/images/";
}else{
	$target_path = "files/";
}
$file_path = $target_path . basename( $_FILES['uploadfile']['name']); 
if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file_path)) {
	echo "<script language='JavaScript'>
			alert('File berhasil diupload')
			window.location = 'ownerpage/index.php?owner=unggahfoto';
		</script>";
} else{
    echo "<script language='JavaScript'>
			alert('Terjadi kesalahan, file gagal diupload')
			window.location = 'ownerpage/index.php?owner=unggahfoto';
		</script>";
}
?>
</body>
</html>