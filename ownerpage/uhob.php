<?php
include "../int/secure.php";
?>
<?php
$lihat_artikelnya=mysql_query("SELECT * FROM hobiowner");
$tampil=mysql_fetch_array($lihat_artikelnya);
?>
<head>
<link href="../style/button.css" rel="stylesheet" type="text/css" />
</head>
<form method="post" action="uhobproc">
<table>
<h4>Hobi ke 1</h4>
<tr>
<td>hobi </td>
<td align="left">
<input type="text" name="hobi1" size="30" value="<?php echo $tampil['hobi1'];?>" /></td>
</tr>
<tr>
<td>presentase </td>
<td align="left">
<input type="text" name="skahobi1" size="30" value="<?php echo $tampil['skalahobi1'];?>" /></td>
</tr>
</table>
<table>
<h4>Hobi ke 2</h4>
<tr>
<td>hobi </td>
<td align="left">
<input type="text" name="hobi2" size="30" value="<?php echo $tampil['hobi2'];?>" /></td>
</tr>
<tr>
<td>presentase </td>
<td align="left">
<input type="text" name="skahobi2" size="30" value="<?php echo $tampil['skalahobi2'];?>" /></td>
</tr>
</table>
<table>
<h4>Hobi ke 3</h4>
<tr>
<td>hobi </td>
<td align="left">
<input type="text" name="hobi3" size="30" value="<?php echo $tampil['hobi3'];?>" /></td>
</tr>
<tr>
<td>presentase </td>
<td align="left">
<input type="text" name="skahobi3" size="30" value="<?php echo $tampil['skalahobi3'];?>" /></td>
</tr>
<tr><td align="left" colspan="2"><button class="button" style="vertical-align:middle" type="submit" name="ubah"><span>Kirim </span></button></td></tr>
</table>
</form>