<html>
<head><link href="../style/button.css" rel="stylesheet" type="text/css" /></head>
<body>
	<form enctype="multipart/form-data" action="" method="post">
	<table border="0">
	<tbody>
	<tr><td>Pilih foto profil untuk diunggah:</td></tr>
	<tr>
	<td><input name="gambar" type="file" /></td>
	</tr>
	<td>------------------------------------</td>
	<tr>
	<td><button class="button" style="vertical-align:middle" type="submit" name="ubah"><span>Kirim </span></button></td>
	</tr>
	</tbody>
	</table>
	</form>
	<?php
	include "../int/db.php";
	if($_POST['submit']){
		if($_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0){ 
		$user		= $_SESSION['ownername'];
		$fileName	= $_FILES['gambar']['name'];
		$mimeType	= $_FILES['gambar']['type'];
		$tmpFile	= fopen($_FILES['gambar']['tmp_name'], 'rb');
		$fileData	= fread($tmpFile, filesize($_FILES['gambar']['tmp_name']));  
		$fileData	= addslashes($fileData);	
		$query 		= "update fotoprofil set file_name='potoprofil',mime_type='$mimeType', file_data='$fileData', username='$user' where username='$user' and file_name='potoprofil'";  
		mysql_query($query) or die("Upload Foto Gagal: ".mysql_error());  
		echo "<script language='JavaScript'>
							alert('Berhasil mengganti foto')
							location = 'index.php?owner=unggahfotoprofil';
					  </script>";
		}else{
			echo "<script language='JavaScript'>
							alert('Gagal mengganti foto')
							location = 'index.php?owner=unggahfotoprofil';
					  </script>";
		}
	}else{}
	?>
</body>
</html>