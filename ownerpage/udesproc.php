<?php
include "../int/secure.php";
?>
<?php
$judul=$_POST['judul'];
$deskrip1=$_POST['deskrip1'];
$deskrip2=$_POST['deskrip2'];
include "../int/db.php";
mysql_query("UPDATE deskripsiowner SET judul='$judul',deskrip1='$deskrip1',deskrip2='$deskrip2'");
header("location:index.php?owner=welcome");
?>