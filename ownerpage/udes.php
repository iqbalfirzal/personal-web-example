<?php
include "../int/secure.php";
?>
<head>
<link href="../style/button.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../script/ckeditor/ckeditor.js"></script>
</head>
<?php
$lihat_artikelnya=mysql_query("SELECT * FROM deskripsiowner");
$tampil=mysql_fetch_array($lihat_artikelnya);
?>
<form method="post" action="udesproc">
<table>
<h4>Judul</h4>
<tr>
<td></td>
<td align="left">
<input type="text" name="judul" size="30" value="<?php echo $tampil['judul'];?>" /></td>
</tr>
</table>
<table>
<h4>Deskripsi 1 atas foto profil</h4>
<tr>
<td></td>
<td align="left"><textarea class="ckeditor" cols="80" rows="5" name="deskrip1" value="" ><?php echo $tampil['deskrip1'];?></textarea></td>
</tr>
</table>
<table>
<h4>Deskripsi 2 samping foto profil</h4>
<tr>
<td></td>
<td align="left"><textarea class="ckeditor" cols="80" rows="5" name="deskrip2" value="" ><?php echo $tampil['deskrip2'];?></textarea></td>
</tr>
<tr><td align="left" colspan="2"><button class="button" style="vertical-align:middle" type="submit" name="ubah"><span>Kirim </span></button>
</td></tr>
</table>
</form>
