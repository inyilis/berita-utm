<?php
session_start();
include('config.php');

if(isset($_POST['editProfilUser'])){
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
	
	$sql	= 'UPDATE user set nim="'.$nim.'", nama="'.$nama.'", username="'.$username.'", password="'.$password.'", jurusan="'.$jurusan.'", jenis_kelamin="'.$jenis_kelamin.'", tgl_lahir="'.$tgl_lahir.'", alamat="'.$alamat.'", email="'.$email.'", no_hp="'.$no_hp.'" where nim="'.$nim.'"';
	$query	= mysqli_query($con,$sql);
	
	if($query){
		?>
		<script language="JavaScript">
			alert('Berhasil diruabah');
			document.location='page-user.php?page=profil';
		</script>
		<?php
	}
	else{
		?>
		<script language="JavaScript">
			alert('Gagal diruabah');
			document.location='page-user.php?page=profil';
		</script>
		<?php
	}
}
?>