<!DOCTYPE html>
<html>
<head>
	<title>Berita UTM</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="css/wall.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 	<script type="text/javascript" src="js/jquery.oembed.js"></script>
 	<script type="text/javascript" src="js/wall.js"></script>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">Berita UTM</h1>
		<h3 class="deskripsi">Dapatkan Informasi Kehilangan dan Penemuan Barang di Sekitar Kampus Universitas Trunojoyo Madura</h3>
	</header>
	<div class="menu">
		<ul>
			<li><a href="page-user.php?page=berita">BERITA UTM</a></li>
			<li><a href="page-user.php?page=riwayat">RIWAYAT BERITA</a></li>
			<li><a href="page-user.php?page=profil">PROFIL</a></li>				
			<li><a href="page-user.php?page=logout">LOGOUT</a></li>
		</ul>
	</div>

	<div class="badan">

	<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'berita':
				include "berita.php";
				break;
			case 'riwayat':
				include "riwayat.php";
				break;
			case 'profil':
				include "profil-user.php";
				break;
			case 'logout':
				include "logout.php";
				break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "berita.php";
	}

	 ?>

	</div>
	<div class="footer">
		Copyright &copy; 2021
	</div>
</div>
</body>
</html>