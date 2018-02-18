<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<title>Personal web of Novi Khofiyanti</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/lib/css/w3.css">
<link rel="stylesheet" href="style/lib/css/google-font.css">
<link rel="stylesheet" href="style/lib/css/cloudflare-font.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg-1 {
    background-image: url('img/parallax1.jpg');
    min-height: 100%;
}
.bgimg-2 {
    background-image: url("img/parallax2.jpg");
    min-height: 50%;
}
.bgimg-3 {
    background-image: url("img/parallax3.jpg");
    min-height: 50%;
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.table{
	width:100%;
	text-align:center;
}
.table th{
	background-color:#848383;
	color:#FFFFFF;
}
.table tr td{
	border: #dedede solid thin;
}
</style>
<script src="script/jquery.js"></script>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#photo" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-photo"></i> PHOTOS</a>
	<a href="#portofolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTOFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#photo" class="w3-bar-item w3-button" onclick="toggleFunction()">PHOTOS</a>
	<a href="#portofolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTOFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">ASSALAMU'ALAIKUM FRIENDS</span><span class="w3-hide-large">WELCOME</span></span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em><?php include "int/db.php"; $query = mysql_query("select * from deskripsiowner"); $show = mysql_fetch_array($query); echo "$show[judul]"; ?></em></p>
  <p><?php include "int/db.php"; $query = mysql_query("select * from deskripsiowner"); $show = mysql_fetch_array($query); echo "$show[deskrip1]"; ?></p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Novi Khofiyanti</b></p><br>
      <img src="int/profilephoto" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p><?php include "int/db.php"; $query = mysql_query("select * from deskripsiowner"); $show = mysql_fetch_array($query); echo "$show[deskrip2]"; ?></p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">My interesting (hobbies) :</p>
  <p class="w3-wide"><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[hobi1]"; ?></p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" <?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "style='width:$show[skalahobi1]%'"; ?>><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[skalahobi1]"; ?>%</div>
  </div>
  <p class="w3-wide"><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[hobi2]"; ?></p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" <?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "style='width:$show[skalahobi2]%'"; ?>><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[skalahobi2]"; ?>%</div>
  </div>
  <p class="w3-wide"><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[hobi3]"; ?></p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" <?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "style='width:$show[skalahobi3]%'"; ?>><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[skalahobi3]"; ?>%</div>
  </div>
</div>
<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section"></div>
</div>
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PHOTOS</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="photo">
  <h3 class="w3-center">MY PHOTOS</h3>
  <p class="w3-center"><em>Here are some of my photos.<br> Click on the images to make them bigger</em></p><br>
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="img/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>

    <div class="w3-col m3">
      <img src="img/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
  </div>
  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="img/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <button onclick="window.location.href='gallery'" class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>
</div>
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">PORTOFOLIO</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="portofolio">
	<h3 class="w3-center">MY PORTOFOLIO DOCUMENTS</h3>
	<p class="w3-center"><em>I hope it will be my plus value</em></p>
	<?php 
	$umpetke_berkas = array('index.php');
	$umpetke_ext   = array('php, html');
	$dir='files/';
	$dh=opendir($dir) or die('error');
	$no=1;
	echo"<table class='table'>";
	echo"<tr><th>No.</th><th>File Name</th><th>Download</th></tr>";
	while (false !== ($file = readdir($dh))) {
		if ($file != "." && $file != ".." &&
			!in_array($file, $umpetke_berkas) &&
			!in_array(pathinfo($file, PATHINFO_EXTENSION), $umpetke_ext)) 
		{
			echo"<tr><td>$no</td><td style='text-align:left;'>$file</td><td><a href='!down?loc=fl&file=$file'><img src='img/download.png' height='30px'></a></td></tr>";
			$no++;
		}
	}
	echo"</table>";
	closedir($dh);
	?>
</div>
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I LIVE</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <div class="w3-round-large w3-greyscale" style="width:100%;height:400px;"><img src="img/peta.PNG " /></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Pamutih, Ulujami, Pemalang, Jateng, Indonesia<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +6285868847048 <br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: novikhofiyanti@yahoo.co.id<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="int/sendmail.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit" name="Send">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity" onclick="window.location.href='http://facebook.com/novikhofiyanti'"></i>
    <i class="fa fa-instagram w3-hover-opacity" onclick="window.location.href='http://instagram.com/novikhofi'"></i>
  </div>
  <p>Powered by <a href="http://facebook.com/iqbal.firzal" target="_blank" class="w3-hover-text-green">me</a></p>
</footer>
</body>
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
			$('html,body').animate({
			scrollTop: target.offset().top
			}, 1000);
			return false;
			}
		}
	});
});
</script>
=======
<!DOCTYPE html>
<html>
<head>
<title>Personal web of Novi Khofiyanti</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/lib/css/w3.css">
<link rel="stylesheet" href="style/lib/css/google-font.css">
<link rel="stylesheet" href="style/lib/css/cloudflare-font.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg-1 {
    background-image: url('img/parallax1.jpg');
    min-height: 100%;
}
.bgimg-2 {
    background-image: url("img/parallax2.jpg");
    min-height: 50%;
}
.bgimg-3 {
    background-image: url("img/parallax3.jpg");
    min-height: 50%;
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.table{
	width:100%;
	text-align:center;
}
.table th{
	background-color:#848383;
	color:#FFFFFF;
}
.table tr td{
	border: #dedede solid thin;
}
</style>
<script src="script/jquery.js"></script>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#photo" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-photo"></i> PHOTOS</a>
	<a href="#portofolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTOFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#photo" class="w3-bar-item w3-button" onclick="toggleFunction()">PHOTOS</a>
	<a href="#portofolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTOFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">ASSALAMU'ALAIKUM FRIENDS</span><span class="w3-hide-large">WELCOME</span></span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em><?php include "int/db.php"; $query = mysql_query("select * from deskripsiowner"); $show = mysql_fetch_array($query); echo "$show[judul]"; ?></em></p>
  <p><?php include "int/db.php"; $query = mysql_query("select * from deskripsiowner"); $show = mysql_fetch_array($query); echo "$show[deskrip1]"; ?></p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Novi Khofiyanti</b></p><br>
      <img src="int/profilephoto" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p><?php include "int/db.php"; $query = mysql_query("select * from deskripsiowner"); $show = mysql_fetch_array($query); echo "$show[deskrip2]"; ?></p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">My interesting (hobbies) :</p>
  <p class="w3-wide"><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[hobi1]"; ?></p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" <?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "style='width:$show[skalahobi1]%'"; ?>><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[skalahobi1]"; ?>%</div>
  </div>
  <p class="w3-wide"><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[hobi2]"; ?></p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" <?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "style='width:$show[skalahobi2]%'"; ?>><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[skalahobi2]"; ?>%</div>
  </div>
  <p class="w3-wide"><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[hobi3]"; ?></p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" <?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "style='width:$show[skalahobi3]%'"; ?>><?php include "int/db.php"; $query = mysql_query("select * from hobiowner"); $show = mysql_fetch_array($query); echo "$show[skalahobi3]"; ?>%</div>
  </div>
</div>
<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section"></div>
</div>
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PHOTOS</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="photo">
  <h3 class="w3-center">MY PHOTOS</h3>
  <p class="w3-center"><em>Here are some of my photos.<br> Click on the images to make them bigger</em></p><br>
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="img/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>

    <div class="w3-col m3">
      <img src="img/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
  </div>
  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="img/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col m3">
      <img src="img/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <button onclick="window.location.href='gallery'" class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>
</div>
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">PORTOFOLIO</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="portofolio">
	<h3 class="w3-center">MY PORTOFOLIO DOCUMENTS</h3>
	<p class="w3-center"><em>I hope it will be my plus value</em></p>
	<?php 
	$umpetke_berkas = array('index.php');
	$umpetke_ext   = array('php, html');
	$dir='files/';
	$dh=opendir($dir) or die('error');
	$no=1;
	echo"<table class='table'>";
	echo"<tr><th>No.</th><th>File Name</th><th>Download</th></tr>";
	while (false !== ($file = readdir($dh))) {
		if ($file != "." && $file != ".." &&
			!in_array($file, $umpetke_berkas) &&
			!in_array(pathinfo($file, PATHINFO_EXTENSION), $umpetke_ext)) 
		{
			echo"<tr><td>$no</td><td style='text-align:left;'>$file</td><td><a href='!down?loc=fl&file=$file'><img src='img/download.png' height='30px'></a></td></tr>";
			$no++;
		}
	}
	echo"</table>";
	closedir($dh);
	?>
</div>
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I LIVE</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <div class="w3-round-large w3-greyscale" style="width:100%;height:400px;"><img src="img/peta.PNG " /></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Pamutih, Ulujami, Pemalang, Jateng, Indonesia<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +6285868847048 <br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: novikhofiyanti@yahoo.co.id<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="int/sendmail.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit" name="Send">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity" onclick="window.location.href='http://facebook.com/novikhofiyanti'"></i>
    <i class="fa fa-instagram w3-hover-opacity" onclick="window.location.href='http://instagram.com/novikhofi'"></i>
  </div>
  <p>Powered by <a href="http://facebook.com/iqbal.firzal" target="_blank" class="w3-hover-text-green">me</a></p>
</footer>
</body>
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
			$('html,body').animate({
			scrollTop: target.offset().top
			}, 1000);
			return false;
			}
		}
	});
});
</script>
>>>>>>> 78c9e1803c48f576e96452f4c01507b54cb8966d
</html>