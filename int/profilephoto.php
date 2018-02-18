<?php
include "db.php";
$query = mysql_query("SELECT * FROM fotoprofil");
$row = mysql_fetch_assoc($query);
$image_db = $row['file_data'];
header("Content-type: image/jpeg");
echo $image_db;
?>