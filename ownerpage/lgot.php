<?php
session_start();
session_destroy();
$_SESSION['ownermasuk']=false;
header("location:../");
?>