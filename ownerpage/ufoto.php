<?php
include "../int/secure.php";
?>
<head><link href="../style/button.css" rel="stylesheet" type="text/css" /></head>
<form enctype="multipart/form-data" action="../!up" method="post">
<table border="0">
<tbody>
<tr><td>Pilih foto untuk diunggah:</td></tr>
<tr>
<input name="whatup" id="upfoto" value="upfoto" type="hidden" />
<td><input name="uploadfile" id="uploadfile" type="file" /></td>
</tr>
<td>------------------------------------</td>
<tr>
<td><button class="button" style="vertical-align:middle" type="submit" name="ubah"><span>Kirim </span></button></td>
</tr>
</tbody>
</table>
</form>