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
			<li><a >TAMBAH USER</a></li>
			<li><a >DATA USER</a></li>
			<li><a >DATA BERITA</a></li>
			<li><a >PROFIL</a></li>				
			<li><a >LOGOUT</a></li>
		</ul>
	</div>

	<div class="badan">
		<div class="halaman">
		<h2><strong><p align="center">Edit Data User</p></strong></h2>
		<?php
		include('config.php');
		if(isset($_GET['ni'])){
			$ni			= $_GET['ni'];
			$query		= mysqli_query($con,'SELECT * FROM `user` where nim = "'.$ni.'"');
			$data  		= mysqli_fetch_array($query);			
			$nim            = $data['nim'];
			$nama           = $data['nama'];
			$username       = $data['username'];
			$password       = $data['password'];
			$jurusan        = $data['jurusan'];
			$jenis_kelamin  = $data['jenis_kelamin'];
			$tgl_lahir      = $data['tgl_lahir'];
			$alamat         = $data['alamat'];
			$email          = $data['email'];
			$no_hp          = $data['no_hp'];
			$hak_akses      = $data['hak_akses'];
		}
		?>
		<form method="post" action="simpan-admin.php">
			<div align="center"> 
				<table>
	                <tr><td>NIM</td><td><input type="text" name="nim" value="<?php echo $nim; ?>" readonly="readonly"></td></tr>
	                <tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama; ?>"></td></tr>
	                <tr><td>Username</td><td><input type="text" name="username" value="<?php echo $username; ?>"></td></tr>
	                <tr><td>Password</td><td><input type="text" name="password" value="<?php echo $password; ?>"></td></tr>
	                <tr><td>Jurusan</td><td>
	                        <select name="jurusan">                            
	                            <option type="text" name="jurusan" value="<?php echo $jurusan; ?>""><?php echo $jurusan; ?></option>
	                            <option value=" ">===================</option>
	                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
	                            <option value="TEKNIK INDUSTRI">TEKNIK INDUSTRI</option>
	                            <option value="TEKNIK ELEKTRO">TEKNIK ELEKTRO</option>
	                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
	                        </select>
	                    </td></tr>
	                <tr><td>Jenis Kelamin</td><td>
	                    <select name="jenis_kelamin">
	                            <option type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"><?php echo $jenis_kelamin; ?></option>
	                            <option value=" ">===============</option>
	                            <option value="Laki-laki">Laki-laki</option>
	                            <option value="Perempuan">Perempuan</option>
	                        </select>
	                    </td></tr>                
	                <tr><td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"></td></tr>
	                <tr><td>Alamat</td><td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td></tr>
	                <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
	                <tr><td>No HP</td><td><input type="text" name="no_hp" value="<?php echo $no_hp; ?>"></td></tr>
	                <tr><td>Hak Akses</td><td>
	                    <select name="hak_akses">
	                            <option type="text" name="hak_akses" value="<?php echo $hak_akses; ?>"><?php echo $hak_akses; ?></option>
	                            <option value=" ">===============</option>
	                            <option value="mahasiswa">Mahasiswa</option>
	                            <option value="satpam">Satpam</option>
	                        </select>
	                    </td></tr>
	            </table>
	        </div>
	        <div align="center"> 
	            <tr><td colspan="2"><button type="submit" name="edit" value="EDIT">Simpan Perubahan</button></td></tr>
	        </div>
	        </form>
		</div>
	</div>
	<div class="footer">
		Copyright &copy; 2021
	</div>
</div>
</body>
</html>