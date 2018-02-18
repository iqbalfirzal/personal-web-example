<?php
include "../int/secure.php";
?>
<?php
$hobi1=$_POST['hobi1'];
$skahobi1=$_POST['skahobi1'];
$hobi2=$_POST['hobi2'];
$skahobi2=$_POST['skahobi2'];
$hobi3=$_POST['hobi3'];
$skahobi3=$_POST['skahobi3'];
include "../int/db.php";
mysql_query("UPDATE hobiowner SET hobi1='$hobi1',skalahobi1='$skahobi1',hobi2='$hobi2',skalahobi2='$skahobi2',hobi3='$hobi3',skalahobi3='$skahobi3'");
header("location:index.php?owner=welcome");
?>