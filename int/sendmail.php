<?php
if ( isset ( $_POST [ 'Send' ] )){
$to = 'novikhofiyanti@yahoo.co.id';
$subject = $_POST [ "Name" ] ;
$message = $_POST [ "Message" ] ;
$headers = 'From: ' . $_POST[ "Email" ] . PHP_EOL ;
mail ( $to, $subject, $message, $headers ) ;
echo  "<script language='JavaScript'>
			alert('Your e-mail has been sent!')
			window.location = 'index.php';
		</script>";}

else{
?>