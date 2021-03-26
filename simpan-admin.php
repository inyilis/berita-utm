<?php
include('config.php');
session_start();
$admin = mysqli_query($con, "SELECT * FROM admin");
$qry = mysqli_fetch_array($admin);
$_SESSION['id'] = $qry['id'];

if(isset($_POST['tambah'])){

	$nim            = $_POST['nim'];
	$id_admin       = $qry['id'];
	$nama           = $_POST['nama'];
	$username       = $_POST['username'];
	$password       = $_POST['password'];
	$jurusan        = $_POST['jurusan'];
	$jenis_kelamin  = $_POST['jenis_kelamin'];
	$tgl_lahir      = $_POST['tgl_lahir'];
	$alamat         = $_POST['alamat'];
	$email          = $_POST['email'];
	$no_hp          = $_POST['no_hp'];
	$hak_akses      = $_POST['hak_akses'];

	$query="INSERT INTO `user` (`nim`, `id_admin`, `nama`, `username`, `password`, `jurusan`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `email`, `no_hp`, `hak_akses`) VALUES ('$nim', '$id_admin', '$nama', '$username', '$password', '$jurusan', '$jenis_kelamin', '$tgl_lahir', '$alamat', '$email', '$no_hp', '$hak_akses')";
	$result = mysqli_query($con, $query);
	if($result){
		?>
		<script language="JavaScript">
			alert('Berhasil Menambah User');
			document.location='page-admin.php';
		</script>
		<?php
	}
	else{
		?>
		<script language="JavaScript">
			alert('Gagal Menambah User');
			document.location='page-admin.php';
		</script>
		<?php
	}
}

if(isset($_POST['edit'])){
	$nim	= $_POST['nim'];
	$nama	= $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$jurusan	= $_POST['jurusan'];
	$jenis_kelamin  = $_POST['jenis_kelamin'];
	$tgl_lahir      = $_POST['tgl_lahir'];
	$alamat         = $_POST['alamat'];
	$email          = $_POST['email'];
	$no_hp          = $_POST['no_hp'];
	$hak_akses      = $_POST['hak_akses'];
	
	$sql	= 'UPDATE user set nim="'.$nim.'", nama="'.$nama.'", username="'.$username.'", password="'.$password.'", jurusan="'.$jurusan.'", jenis_kelamin="'.$jenis_kelamin.'", tgl_lahir="'.$tgl_lahir.'", alamat="'.$alamat.'", email="'.$email.'", no_hp="'.$no_hp.'", hak_akses="'.$hak_akses.'" where nim="'.$nim.'"';
	$query	= mysqli_query($con,$sql);
	
	if($query){
		header('location:page-admin.php?page=data-user');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['editProfilAdmin'])){
	$id	= $_POST['id'];
	$nama	= $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	
	$sql	= 'UPDATE admin set nama="'.$nama.'", username="'.$username.'", password="'.$password.'" where id="'.$id.'"';
	$query	= mysqli_query($con,$sql);
	
	if($query){
		?>
		<script language="JavaScript">
			alert('Berhasil diruabah');
			document.location='page-admin.php?page=profil';
		</script>
		<?php
	}
	else{
		?>
		<script language="JavaScript">
			alert('Gagal diruabah');
			document.location='page-admin.php?page=profil';
		</script>
		<?php
	}
}
?>