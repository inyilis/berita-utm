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
			<li><a >BERITA UTM</a></li>
			<li><a >RIWAYAT BERITA</a></li>
			<li><a >PROFIL</a></li>				
			<li><a >LOGOUT</a></li>
		</ul>
	</div>

	<div class="badan">
		<div class="halaman">
		<h2><strong><p align="center">Edit Berita</p></strong></h2>
		<?php
		include('config.php');
		if(isset($_GET['ni'])){
			$ni			= $_GET['ni'];
			$query		= mysqli_query($con,'SELECT * FROM `berita` where b_id = "'.$ni.'"');
			$data  		= mysqli_fetch_array($query);			
			$isi        = $data['isi']; echo $isi;
		}
		?>
		<form method="post" action="message_ajax.php">
			<textarea cols="30" rows="4" type="text" maxlength="1000" value="<?php echo $isi; ?>"  ></textarea>
			<br />
			<input type="submit" value=" Upload "  id="update_button"  class="update_button"/>
		</form>
		</div>
	</div>
	<div class="footer">
		Copyright &copy; 2021
	</div>
</div>
</body>
</html>