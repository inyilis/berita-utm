<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['hak_akses']!="admin"){
    die("Anda bukan admin");//jika bukan admin jangan lanjut
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Berita UTM</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<link href="css/wall.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">Berita UTM</h1>
		<h3 class="deskripsi">Dapatkan Informasi Kehilangan dan Penemuan Barang di Sekitar Kampus Universitas Trunojoyo Madura</h3>
	</header>
	<div class="menu">
		<ul>
			<li><a href="page-admin.php?page=tambah-user">TAMBAH USER</a></li>
			<li><a href="page-admin.php?page=data-user">DATA USER</a></li>
			<li><a href="page-admin.php?page=berita">DATA BERITA</a></li>
			<li><a href="page-admin.php?page=profil">PROFIL</a></li>				
			<li><a href="page-admin.php?page=logout">LOGOUT</a></li>
		</ul>
	</div>

	<div class="badan">

	<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'tambah-user':
				include "tambah-user.php";
				break;
			case 'data-user':
				include "data-user.php";
				break;
			case 'berita':
				include "dataBerita.php";
				break;
			case 'profil':
				include "profil-admin.php";
				break;
			case 'logout':
				include "logout.php";
				break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "tambah-user.php";
	}

	 ?>

	</div>
	<div class="footer">
		Copyright &copy; 2021
	</div>
</div>
</body>
</html>