<?php
session_start();
if(!$_SESSION['ownermasuk'])
{
	header("location:login");
}else{
	include "../int/db.php";
}
?>
<!doctype html>
<html>
  <head>
	<title>Halaman Pemilik</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
    <link href="static/style.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="static/script.js"></script>
  </head>
  <body>
    <div id="sidedrawer" class="mui--no-user-select">
      <div id="sidedrawer-brand" class="mui--appbar-line-height">
        <span class="mui--text-title">Halaman Pemilik</span>
      </div>
      <div class="mui-divider"></div>
      <ul>
        <li>
          <strong>Unggah</strong>
          <ul>
            <li><a href='?owner=unggahfotoprofil'>Unggah Foto Profil</a></li>
            <li><a href='?owner=unggahfoto'>Unggah Foto Koleksi</a></li>
            <li><a href='?owner=unggahfile'>Unggah Dokumen Portofolio</a></li>
          </ul>
        </li>
        <li>
          <strong>Kelola</strong>
          <ul>
            <li><a href='?owner=kelolafoto'>Kelola Foto Koleksi</a></li>
            <li><a href='?owner=kelolafile'>Kelola Dokumen Fortofolio</a></li>
          </ul>
        </li>
        <li>
          <strong>Ubah</strong>
          <ul>
            <li><a href='?owner=ubahdeskripsi'>Ubah Data Deskripsi</a></li>
            <li><a href='?owner=ubahhobi'>Ubah Data Hobi</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <header id="header">
      <div class="mui-appbar mui--appbar-line-height">
        <div class="mui-container-fluid">
          <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer">☰</a>
          <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer">☰</a>
          <span class="mui--text-title mui--visible-xs-inline-block mui--visible-sm-inline-block">Halaman Pemilik</span>
        </div>
      </div>
    </header>
    <div id="content-wrapper">
      <div class="mui--appbar-height"></div>
      <div class="mui-container-fluid">
        <br>
        <h1><?php print $_GET['owner'];?></h1>
		<?php
			if(ISSET($_GET["owner"])){
			if($_GET["owner"]=="welcome"){echo"<p>Selamat datang, pada halaman ini Kamu bisa merubah data yang ada pada web pribadi Kamu sesusai keinginan.</p><br></br><img src='../img/kitty.gif'/>";}
			else if($_GET["owner"]=="unggahfotoprofil"){include "ufotoprof.php";}
			else if($_GET["owner"]=="unggahfoto"){include "ufoto.php";}
			else if($_GET["owner"]=="kelolafoto"){include "kfoto.php";}
			else if($_GET["owner"]=="unggahfile"){include "ufile.php";}
			else if($_GET["owner"]=="kelolafile"){include "kfile.php";}
			else if($_GET["owner"]=="ubahdeskripsi"){include "udes.php";}
			else if($_GET["owner"]=="ubahhobi"){include "uhob.php";}}
		?>
	   </div>
    </div>
	<a href="lgot" class="float"><img src="../img/logout.png" align="center" height="95%" width="80%"/></a>
    <footer id="footer">
      <div class="mui-container-fluid">
        <br>Made with ♥ by me</a><br><p>&copy;2018, Mantan</p>
      </div>
    </footer>
  </body>
</html>