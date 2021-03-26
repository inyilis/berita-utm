<?php 
session_start();
require_once('config.php');
if(isset($_POST) & !empty($_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];

    $admin = mysqli_query($con, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    $user = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($admin)==1){//jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($admin);
        $_SESSION['username'] = $qry['username'];
		$_SESSION['nama'] = $qry['nama'];
        $_SESSION['hak_akses'] = $qry['hak_akses'];
        if($qry['hak_akses']=="admin"){
            header("location:page-admin.php");
        }
    } else if(mysqli_num_rows($user)==1){//jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($user);
        $_SESSION['nim'] = $qry['nim'];
        include('session.php');
        $_SESSION['username'] = $qry['username'];
		$_SESSION['nama'] = $qry['nama'];
        $_SESSION['hak_akses'] = $qry['hak_akses'];
        if($qry['hak_akses']=="mahasiswa" || $qry['hak_akses']=="satpam"){
            header("location:page-user.php");
        }
    }
    else{
		?>
		<script language="JavaScript">
			alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
			document.location='index.php';
		</script>
		<?php
    }
}
?>