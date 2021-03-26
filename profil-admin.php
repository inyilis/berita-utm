<div class="halaman">
	<h2><strong><p align="center">Edit Data Admin</p></strong></h2>
	<?php		
		include('config.php');
		$sql	= 'SELECT * FROM `admin`';
		$query	= mysqli_query($con,$sql);
		$data  		= mysqli_fetch_array($query);

			$id            = $data['id'];
			$nama           = $data['nama'];
			$username       = $data['username'];
			$password       = $data['password'];
	?>
		<form method="post" action="simpan-admin.php">
			<div align="center"> 
				<table>
	                <tr><td>ID</td><td><input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly"></td></tr>
	                <tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama; ?>"></td></tr>
	                <tr><td>Username</td><td><input type="text" name="username" value="<?php echo $username; ?>"></td></tr>
	                <tr><td>Password</td><td><input type="text" name="password" value="<?php echo $password; ?>"></td></tr>	                
	            </table>
	            <tr><td colspan="2"><button type="submit" name="editProfilAdmin" value="editProfilAdmin">Simpan Perubahan</button></td></tr>
	        </div>
	        </form>
</div>